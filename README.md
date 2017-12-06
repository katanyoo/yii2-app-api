<p align="center">
    <a href="https://github.com/katanyoo/yii2-app-api" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 RESTful API Project Template</h1>
    <br>
</p>



DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Controller classes
      modules/            contains Module for api
        v1/               contains Controller classes and Model classes
          controllers/    contains Module controller classes
          models/         contains Model classes
      mail/               contains view files for e-mails
      runtime/            contains files generated during runtime
      tests/              contains various tests for the api application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar create-project --prefer-dist katanyoo/yii2-app-api api
~~~

Now you should be able to access the application through the following URL, assuming `api` is the directory
directly under the Web root.

~~~
http://localhost/api/web/
~~~


### Install from an Archive File

Extract the archive file downloaded from [github.com](http://github.com/katanyoo/yii2-app-api) to
a directory named `api` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/api/web/
~~~


CONFIGURATION
-------------

### API Versioning

Edit the file `config/modules.php` for each of API versions


### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2api',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to api application tests.


Basic usage (HTTP Client)
-------------------------

Performing HTTP GET request with mime type detection:
```php
// Result is html text
$text = Yii::$app->httpclient->get('http://httpbin.org/html');

// Result is SimpleXMLElement containing parsed XML
$xml = Yii::$app->httpclient->get('http://httpbin.org/xml');

// Result is parsed JSON array
$json = Yii::$app->httpclient->get('http://httpbin.org/get');

```

You can disable this behavior by specifying `$detectMimeType` option to whole component or single call

```php
// Result is Guzzle `Response` object
$text = Yii::$app->httpclient->get('http://httpbin.org/xml', [], false);

```

Make request with custom options:

```php
$text = Yii::$app->httpclient->get('http://httpbin.org/xml', [
    'proxy' => 'tcp://localhost:8125'
]);
```

Read more about this options in [Guzzle 6 documentation](http://guzzle.readthedocs.org/en/latest/request-options.html)

## HTTP methods

You can make request with several ways:

1. Call shortcut method (`get()`, `post()`, `put()`, `delete()`, etc.)
2. Call `request()` method

All shortcut methods has the same signature except `get()`:

```php
// Synchronous GET request
Yii::$app->httpclient->get(
    $url, // URL
    [], // Options
    true // Detect Mime Type?
);

// Synchronous POST (and others) request
Yii::$app->httpclient->post(
    $url, // URL
    $body, // Body
    [], // Options
    true // Detect Mime Type?
);

// Asynchronous GET request
Yii::$app->httpclient->getAsync(
    $url, // URL
    [] // Options
);

// Asynchronous POST (and others) request
Yii::$app->httpclient->postAsync(
    $url, // URL
    $body, // Body
    [] // Options
);

```

> __NOTE__: you still can make a GET request with body via `request()` function

## Asynchronous calls

To make an asynchronous request simly add `Async` to end of request method:

```php
// PromiseInterface
$promise = Yii::$app->httpclient->postAsync('http://httpbin.org/post');
```

> __NOTE__: mime type detection is not supported for asynchronous calls

Read more about asynchronous requests in [Guzzle 6 documentation](http://guzzle.readthedocs.org/en/latest/quickstart.html#async-requests)

## Request body

Types you can pass as a body of request:

1. __Arrayable object__ (ActiveRecord, Model etc.) - will be encoded into JSON object
2. __Array__ - will be sent as form request (x-form-urlencoded)

Any other data passed as body will be sent into Guzzle without any transformations.

Read more about request body in [Guzzle documentation](http://guzzle.readthedocs.org/en/latest/request-options.html#body)
