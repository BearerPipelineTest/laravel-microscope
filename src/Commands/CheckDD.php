<?php

namespace Imanghafoori\LaravelMicroscope\Commands;

use Illuminate\Console\Command;
use Imanghafoori\LaravelMicroscope\Analyzers\FilePath;
use Imanghafoori\LaravelMicroscope\ErrorTypes\ddFound;
use Imanghafoori\LaravelMicroscope\SpyClasses\RoutePaths;
use Imanghafoori\LaravelMicroscope\Analyzers\ComposerJson;
use Imanghafoori\LaravelMicroscope\Analyzers\FunctionCall;

class CheckDD extends Command
{
    protected $signature = 'check:dd {--d|detailed : Show files being checked}';

    protected $description = 'Checks the debug functions';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Checking dd...');

        $this->checkRoutePaths();
        $this->checkPsr4Classes();

        event('microscope.finished.checks', [$this]);
    }

    private function checkForDD($absPath)
    {
        $tokens = token_get_all(file_get_contents($absPath));

        foreach($tokens as $i => $token) {
            if (
                ($index = FunctionCall::isGlobalCall('dd', $tokens, $i)) ||
                ($index = FunctionCall::isGlobalCall('dump', $tokens, $i)) ||
                ($index = FunctionCall::isGlobalCall('ddd', $tokens, $i))
            ) {
                ddFound::isMissing($absPath, $tokens[$index][2], $tokens[$index][1]);
            }
        }
    }

    private function checkRoutePaths()
    {
        foreach (RoutePaths::get() as $filePath) {
            $this->checkForDD($filePath);
        }
    }

    private function checkPsr4Classes()
    {
        $psr4 = ComposerJson::readKey('autoload.psr-4');

        foreach ($psr4 as $_namespace => $dirPath) {
            foreach (FilePath::getAllPhpFiles($dirPath) as $filePath) {
                $this->checkForDD($filePath->getRealPath());
            }
        }
    }
}
