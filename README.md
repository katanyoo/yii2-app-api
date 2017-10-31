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
