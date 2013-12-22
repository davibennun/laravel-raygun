# Installation

Update your `composer.json` file to include this package as a dependency
```json
"davibennun/laravel-raygun": "dev-master"
```

Register the Raygun service provider by adding it to the providers array in the `app/config/app.php` file.
```
Davibennun\LaravelRaygun\LaravelRaygunServiceProvider
```

Alias the Raygun facade by adding it to the aliases array in the `app/config/app.php` file.
```php
'aliases' => array(
	'Raygun' => 'Davibennun\LaravelRaygun\Facades\Raygun'
)
```

# Configuration

Copy the config file into your project by running
```
php artisan config:publish davibennun/laravel-raygun
```

Edit the config file to include your app ID and secret key.

# Usage

This Raygun class extends the Raygun PHP, so all the methods listed here http://github.com/MindscapeHQ/raygun4php are available.


```php
App::error(function(Exception $exception)
{
    Raygun::sendException($exception);
});
```