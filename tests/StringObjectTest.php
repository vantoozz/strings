<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use PHPUnit\Framework\TestCase;

/**
 * Class StringObjectTest
 * @package Vantoozz\Strings
 */
final class StringObjectTest extends TestCase
{
    /**
     * @test
     */
    public function it_stores_a_string()
    {
        $this->assertEquals('some string', (string)new StringObject('some string'));
    }
}
