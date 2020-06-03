<?php declare(strict_types=1);

use Vantoozz\Strings\Formats\Email;
use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\StringObject;
use Vantoozz\Strings\Transforms\CaseToggled;


require_once __DIR__ . '/../vendor/autoload.php';

$username = new StringObject('User@');
$domain = new StringObject('@Example.Com');

echo new CaseToggled(new Email(new EndingWith($username, $domain))) . PHP_EOL;
