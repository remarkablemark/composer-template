# composer-template

[![packagist](https://img.shields.io/packagist/v/remarkablemark/composer-template)](https://packagist.org/packages/remarkablemark/composer-template)
[![test](https://github.com/remarkablemark/composer-template/actions/workflows/test.yml/badge.svg)](https://github.com/remarkablemark/composer-template/actions/workflows/test.yml)

Composer package template

## Requirements

PHP >=7

## Install

Install with [Composer](http://getcomposer.org/):

```sh
composer require remarkablemark/composer-template
```

## Usage

Autoload:

```php
require_once 'vendor/autoload.php';
```

Use namespace:

```php
use Remarkablemark\ComposerTemplate\ClassExample;

$example = new ClassExample();
echo $example->say(); // 'Hello, world!'
```

Or instantiate class:

```php
$example = new \Remarkablemark\ComposerTemplate\ClassExample();
echo $example->say('Mark'); // 'Hello, Mark!'
```

## License

[MIT](LICENSE)
