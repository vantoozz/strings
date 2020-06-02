<?php declare(strict_types=1);

namespace Vantoozz\Strings\Joins;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\StringObject;

/**
 * Class AbstractJoinTest
 * @package Vantoozz\Strings\Joins
 */
abstract class AbstractJoinTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $one
     * @param string $two
     * @param string $output
     */
    public function it_works(string $one, string $two, string $output)
    {
        $joinClassName = $this->joinClassName();
        $this->assertEquals(
            $output,
            (string)new $joinClassName(
                new StringObject($one),
                new StringObject($two)
            )
        );
    }

    /**
     * @return string
     */
    abstract protected function joinClassName(): string;

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        return $this->examples();
    }

    /**
     * @return string[]
     */
    abstract protected function examples(): array;
}
