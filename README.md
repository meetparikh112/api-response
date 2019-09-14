## Installation

1) In order to install meet/api-response, just  run `composer require meet/api-response`:

2) Open your `config/app.php` and add the following to the `providers` array:

```php
Meet\ApiResponse\ApiResponseServiceProvider::class,
```

3) In the same `config/app.php` and add the following to the `aliases ` array: 

```php
'ApiResponse' => Meet\ApiResponse\ApiResponseServiceProvider::class,
```

<!-- 4) Run the command below to publish the package config file `config/entrust.php`:

```shell
php artisan vendor:publish
``` -->
