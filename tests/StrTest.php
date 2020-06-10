<?php declare(strict_types=1);


namespace Vantoozz\Strings;


use PHPUnit\Framework\TestCase;

/**
 * Class StrTest
 * @package Vantoozz\Strings
 */
final class StrTest extends TestCase
{
    /**
     * @test
     */
    public function it_stores_a_string()
    {
        $this->assertSame('some string', (string)str('some string'));
    }
}
