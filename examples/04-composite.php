<?php declare(strict_types=1);

use Vantoozz\Strings\Formats\Email;
use Vantoozz\Strings\Joins\EndingWith;
use Vantoozz\Strings\Transforms\CaseToggled;

use function Vantoozz\Strings\string;


require_once __DIR__ . '/../vendor/autoload.php';

$username = string('User@');
$domain = string('@Example.Com');

echo new CaseToggled(new Email(new EndingWith($username, $domain))) . PHP_EOL;
