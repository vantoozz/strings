<?php declare(strict_types=1);

namespace Vantoozz\Strings\Transforms;

use PHPUnit\Framework\TestCase;
use Vantoozz\Strings\StringObject;

/**
 * Class AbstractTransformTest
 * @package Vantoozz\Strings\Transforms
 */
abstract class AbstractTransformTest extends TestCase
{
    /**
     * @test
     * @dataProvider examplesProvider
     * @param string $input
     * @param string $output
     */
    public function it_works(string $input, string $output)
    {
        $transformClassName = $this->transformClassName();
        $this->assertEquals($output, (string)new $transformClassName(new StringObject($input)));
    }

    /**
     * @return array
     */
    public function examplesProvider(): array
    {
        $examples = $this->examples();

        return array_map(static function ($input, $output) {
            return [$input, $output];
        }, array_keys($examples), $examples);
    }

    /**
     * @return string
     */
    abstract protected function transformClassName(): string;

    /**
     * @return string[]
     */
    abstract protected function examples(): array;
}
