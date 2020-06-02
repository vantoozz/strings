<?php declare(strict_types=1);

namespace Vantoozz\Strings;

use PHPUnit\Framework\TestCase;

/**
 * Class JoinedTest
 * @package Vantoozz\Strings
 */
final class JoinedTest extends TestCase
{
    /**
     * @test
     */
    public function it_joins_strings()
    {
        $this->assertEquals(
            'somestring',
            (string)new Joined(
                new StringObject('some'),
                new StringObject('string')
            )
        );
    }
}
