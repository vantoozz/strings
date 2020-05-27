# Strings
Library for strings manipulation

[![Build Status](https://travis-ci.org/vantoozz/strings.svg?branch=master)](https://travis-ci.org/vantoozz/strings)
[![Coverage Status](https://coveralls.io/repos/github/vantoozz/strings/badge.svg?branch=master)](https://coveralls.io/github/vantoozz/strings?branch=master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/724532697bb642b293e4f8a3b462a8ee)](https://app.codacy.com/manual/vantoozz/strings?utm_source=github.com&utm_medium=referral&utm_content=vantoozz/strings&utm_campaign=Badge_Grade_Settings)
[![Packagist](https://img.shields.io/packagist/v/vantoozz/strings.svg)](https://packagist.org/packages/vantoozz/strings)



## Setup
Just run
```bash
composer require vantoozz/strings
```

## Example
```php
<?php declare(strict_types = 1);

use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\Acronym;

require_once __DIR__ . '/vendor/autoload.php';

var_dump((string)new Acronym(new StringObject('PHP: Hypertext Preprocessor')));
```
Will output
```bash
PHP
```

### Available transformations
* Acronym
* CaseToggled
* SnakeCased

## Testing
```bash
./vendor/bin/phpunit
```
