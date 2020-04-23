<h1 align="center">
    Find Bugs Before They Bite
</h1>
<h2 align="center">
Give your eyes a rest, this will check it for you.
</h2>
  <h3 align="center">  
This package is created in order to understand laravel magic and be smarter than phpstorm.
</h3>
<p align="center">
    <img width="300px" src="https://user-images.githubusercontent.com/6961695/78522127-920e9e80-77e1-11ea-869a-05a29466e6b0.png" alt="widgetize_header"></img>
</p>

<h4 align="center">
Built with :heart: for lazy laravel developers ;)
</h4>

<p align="center"><a href="https://packagist.org/packages/imanghafoori/laravel-microscope" rel="nofollow"><img src="https://camo.githubusercontent.com/8d75e05f4b67de65b51e10772b054f506aa8cfab/68747470733a2f2f696d672e736869656c64732e696f2f7061636b61676973742f762f696d616e676861666f6f72692f6c61726176656c2d6d6963726f73636f70652e7376673f7374796c653d666c61742d737175617265" alt="Latest Version on Packagist" data-canonical-src="https://img.shields.io/packagist/v/imanghafoori/laravel-microscope.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://travis-ci.org/imanghafoori1/laravel-self-test" rel="nofollow"><img src="https://camo.githubusercontent.com/63b18ae839896de4604ede21595326389fed0b1f/68747470733a2f2f696d672e736869656c64732e696f2f7472617669732f696d616e676861666f6f7269312f6c61726176656c2d73656c662d746573742f6d61737465722e7376673f7374796c653d666c61742d737175617265" alt="Build Status" data-canonical-src="https://img.shields.io/travis/imanghafoori1/laravel-self-test/master.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://scrutinizer-ci.com/g/imanghafoori1/laravel-microscope" rel="nofollow"><img src="https://camo.githubusercontent.com/ee6d1b9eee22268201b7e253867c6bb64838651e/68747470733a2f2f696d672e736869656c64732e696f2f7363727574696e697a65722f672f696d616e676861666f6f7269312f6c61726176656c2d6d6963726f73636f70652e7376673f7374796c653d666c61742d737175617265" alt="Quality Score" data-canonical-src="https://img.shields.io/scrutinizer/g/imanghafoori1/laravel-microscope.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/imanghafoori/laravel-microscope" rel="nofollow"><img src="https://camo.githubusercontent.com/5441e915afbdb81de92b808965f294b0c7d18c52/68747470733a2f2f706f7365722e707567782e6f72672f696d616e676861666f6f72692f6c61726176656c2d6d6963726f73636f70652f642f6461696c79" alt="Daily Downloads" data-canonical-src="https://poser.pugx.org/imanghafoori/laravel-microscope/d/daily" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/imanghafoori/laravel-microscope" rel="nofollow"><img src="https://camo.githubusercontent.com/7f10826df8cf3fb52525fd2494554c0e587b8bb7/68747470733a2f2f696d672e736869656c64732e696f2f7061636b61676973742f64742f696d616e676861666f6f72692f6c61726176656c2d6d6963726f73636f70652e7376673f7374796c653d666c61742d737175617265" alt="Total Downloads" data-canonical-src="https://img.shields.io/packagist/dt/imanghafoori/laravel-microscope.svg?style=flat-square" style="max-width:100%;"></a>
<a href="/imanghafoori1/laravel-microscope/blob/master/LICENSE.md"><img src="https://camo.githubusercontent.com/d885b3999bb863974fb67118174bb0402d089a89/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d4d49542d626c75652e7376673f7374796c653d726f756e642d737175617265" alt="Software License" data-canonical-src="https://img.shields.io/badge/license-MIT-blue.svg?style=round-square" style="max-width:100%;"></a></p>

## Key things to know:

- It is created to be smarter than phpstorm and other IDEs in finding errors.
- It is created to understand laravel run-time and magic.
- It does not show you stupid false errors, all the errors are really errors.
- If you have written a lot of tests for your app, you may not need this.

## <g-emoji class="g-emoji" alias="arrow_down" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2b07.png">⬇️</g-emoji> Installation 

You can install the package via composer:

```bash
composer require imanghafoori/laravel-microscope --dev
```

## <g-emoji class="g-emoji" alias="gem" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f48e.png">💎</g-emoji> Usage

You can run:
<p> <h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:events
</h4>
</p>
<p>
<h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:gates
     </h4>
</p>
<p>
<h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:views
</h4>
</p>
<p>
<h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:routes 
 </h4>
 
`(checks controller class and method also the blade files path to be correct)`
</p>
<p>
<h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:psr4 
</h4>
</p>

`Auto-corrects namespaces`
 
<p>
    <h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:imports  </h4>
</p>  

- Checks all the imports at the top and even non-imported inline class usages within .blade.php files, classes to be valid !

<p>
<h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:all </h4>
</p>
<p>
    <h4>
<g-emoji class="g-emoji" alias="small_blue_diamond" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f539.png">🔹</g-emoji> php artisan check:stringy_classes </h4>
</p>

## <g-emoji class="g-emoji" alias="book" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4d6.png">📖</g-emoji> What the Commands do?

Lets start with:
```php
php artisan check:events
```

For example consider:

```php
Event::listen(MyEvent::class, '\App\Listeners\MyListener@myMethod');
```

1 - It checks the  `\App\Listeners\MyListener` class path to be valid.

2 - It checks the  `myMethod` to exist on the `MyListener` class

3 - It checks the  `myMethod` to have the right type-hint (if any) in its signature, for example:
```php
public function myMethod(OtherEvent $e) // <---- notice type-hint here
{
    //
}
```
This is a valid but wrong type-hint, and will be reported to you. Very cool, isn't it ??!


- Note that it does not matter how you are setting your event listener, 

1- in the `EventServiceProvider`, 

2- By `Event::listen` facade, 

3- By Subscriber class... or any other way. The error would be found. :)

----------------------

```php
php artisan check:gates
```

It check the validity of all the gates you have defined, making sure that they refer to a valid class and method.

It also checks for the policy definitions to be valid.

```php
Gate::policy(User::class, 'UserPolicy@someMethod');
Gate::define('someAbility', 'UserGate@someMethod');
```

1 - It checks the  `User` class path to be valid.

2 - It checks the  `UserPolicy` class path to be valid.

3 - It checks the  `someMethod` to exist.

----------------------

```php
php artisan check:psr4
```
- It checks for all the psr4 autoloads defined in the composer.json file and goes through all the classes to have the right namespace, according to PSR-4 standard.
- It automatically corrects namespaces (according to PSR-4 rules)

----------------------

```php
php artisan check:imports
```

- It check all the imports (`use` statements) to be valid.
- It can understand the laravel aliased classes so `use Request;` would be valid.

----------------------

``` php
php artisan check:routes
```

- It check that your routes refer to valid controller classes and methods.
- It checks the all the controller methods to have valid type-hints.
- It scans your controller code and find the `view()` and `View::make()` and reports if they refer to wrong files.
- It scans your blade files for `@include()` and `@extends()` and reports if they refer to wrong files.

and more features will be added soon. ;)

## Credits

- [Iman](https://github.com/imanghafoori1)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

--------------------

### :raising_hand: Contributing
If you find an issue, or have a better way to do something, feel free to open an issue or a pull request.
If you use laravel-microscope in your open source project, create a pull request to provide it's url as a sample application in the README.md file.


### :exclamation: Security
If you discover any security related issues, please email `imanghafoori1@gmail.com` instead of using the issue tracker.


### :star: Your Stars Make Us Do More :star:
As always if you found this package useful and you want to encourage us to maintain and work on it. Just press the star button to declare your willing.

Stargazers: https://github.com/imanghafoori1/microscope/stargazers

## More from the author:

### Laravel HeyMan

:gem: It allows us to write expressive code to authorize, validate and authenticate.

- https://github.com/imanghafoori1/laravel-heyman


--------------

### Laravel Terminator


 :gem: A minimal yet powerful package to give you the opportunity to refactor your controllers.

- https://github.com/imanghafoori1/laravel-terminator

------------

### Laravel AnyPass

:gem: It allows you login with any password in the local environment only.

- https://github.com/imanghafoori1/laravel-anypass

------------

### Eloquent Relativity

:gem: It allows you to decouple your eloquent models to reach a modular structure

- https://github.com/imanghafoori1/eloquent-relativity

----------------

### 🍌 Reward me a banana 🍌

Send me as much as a banana costs in your region:

- DogeCoin: DJEZr6GJ4Vx37LGF3zSng711AFZzmJTouN
- LiteCoin: ltc1q82gnjkend684c5hvprg95fnja0ktjdfrhcu4c4
- BitCoin: bc1q53dys3jkv0h4vhl88yqhqzyujvk35x8wad7uf9
- Ripple: rJwrb2v1TR6rAHRWwcYvNZxjDN2bYpYXhZ
- Etherium: 0xa4898246820bbC8f677A97C2B73e6DBB9510151e

--------------

```
A man will never fail, unless he stops trying.

Albert einstein
```
