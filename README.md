# Strings
Library for strings manipulation

[![Build Status](https://travis-ci.org/vantoozz/strings.svg?branch=master)](https://travis-ci.org/vantoozz/strings)

### Setup
Just run
```bash
composer require vantoozz/strings
```

### Example
```php
<?php declare(strict_types = 1);

use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\Acronym;

require_once __DIR__ . '/vendor/autoload.php';

var_dump((string)new Acronym(new StringObject('PHP: Hypertext Preprocessor')));
```
Will output
```
PHP
```

#### Available transformations
* Acronym
* SnakeCased

### Testing
```bash
./vendor/bin/phpunit
```
