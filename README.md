# Strings
True OOP library for strings manipulation

[![Build Status](https://travis-ci.org/vantoozz/strings.svg?branch=master)](https://travis-ci.org/vantoozz/strings)
[![Coverage Status](https://coveralls.io/repos/github/vantoozz/strings/badge.svg?branch=master)](https://coveralls.io/github/vantoozz/strings?branch=master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/724532697bb642b293e4f8a3b462a8ee)](https://app.codacy.com/manual/vantoozz/strings?utm_source=github.com&utm_medium=referral&utm_content=vantoozz/strings&utm_campaign=Badge_Grade_Settings)
[![Packagist](https://img.shields.io/packagist/v/vantoozz/strings.svg)](https://packagist.org/packages/vantoozz/strings)



The goal of the library is providing an OOP way for strings manipulations. 
It works  with any object implementing `Stringable` interface. https://wiki.php.net/rfc/stringable.

## Setup
Just run
```bash
composer require vantoozz/strings
```

## Transformations
```php
<?php declare(strict_types=1);

use Vantoozz\Strings\Transforms\Acronym;
use Vantoozz\Strings\Transforms\CaseToggled;
use Vantoozz\Strings\Transforms\Reversed;
use Vantoozz\Strings\Transforms\SnakeCased;

use function Vantoozz\Strings\str;

require_once __DIR__ . '/vendor/autoload.php';

$string = str('PHP: Hypertext Preprocessor');

echo new Acronym($string) . PHP_EOL;
echo new CaseToggled($string) . PHP_EOL;
echo new Reversed($string) . PHP_EOL;
echo new SnakeCased($string) . PHP_EOL;

```
Will output
```bash
PHP
php: hYPERTEXT pREPROCESSOR
rossecorperP txetrepyH :PHP
p_h_p:_hypertext_preprocessor
```
### Available transformations
* Acronym
* CamelCased
* CaseToggled
* KebabCased
* LowerCased
* PascalCased
* Reversed
* SentenceCased
* SnakeCased
* TitleCased
* UpperCased

## Joins
```php
<?php declare(strict_types=1);

use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Joins\Joined;
use Vantoozz\Strings\Joins\StartingWith;

use function Vantoozz\Strings\str;

require_once __DIR__ . '/vendor/autoload.php';

$one = str('aabbc');
$two = str('ccddaa');

echo new Joined($one, $two) . PHP_EOL;
echo new EndingWith($one, $two) . PHP_EOL;
echo new StartingWith($one, $two) . PHP_EOL;
```
Will output
```bash
aabbcccddaa
aabbccddaa
ccddaabbc
```

### Available joins
* Joined
* StartingWith
* EndingWith

## Formats
```php
<?php declare(strict_types=1);

use Vantoozz\Strings\Exceptions\InvalidFormatException;
use Vantoozz\Strings\Formats\Email;

use function Vantoozz\Strings\str;

require_once __DIR__ . '/vendor/autoload.php';


try {
    echo new Email(str('user@example.com')) . PHP_EOL;
} catch (InvalidFormatException $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    echo new Email(str('user%example.com')) . PHP_EOL;
} catch (InvalidFormatException $e) {
    echo $e->getMessage() . PHP_EOL;
}
```
Will output
```bash
user@example.com
Invalid format
```
### Available joins
* Email
* Hostname
* Ipv4
* Ipv6
* Mac
* Sha1
* Sha256
* Url

## Composition
```php
<?php declare(strict_types=1);

use Vantoozz\Strings\Formats\Email;
use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Transforms\CaseToggled;

use function Vantoozz\Strings\str;


require_once __DIR__ . '/vendor/autoload.php';

$username = str('User@');
$domain = str('@Example.Com');

echo new CaseToggled(new Email(new EndingWith($username, $domain))) . PHP_EOL;

```
Will output
```bash
uSER@eXAMPLE.cOM
```


## Testing
```bash
./vendor/bin/phpunit
```
