<?php declare(strict_types=1);

namespace Vantoozz\Strings\Formats;

/**
 * Class UrlTest
 * @package Vantoozz\Strings\Formats
 */
final class UrlTest extends AbstractFormatTest
{

    /**
     * @return string
     */
    protected function formatClassName(): string
    {
        return Url::class;
    }

    /**
     * @return string[]
     */
    protected function positives(): array
    {
        return [
            'https://user:pass@host.com:8080/page.html?a=1&b=2&c[]=3&c[]=4',
            'https://example.com/some.html',
        ];
    }

    /**
     * @return string[]
     */
    protected function negatives(): array
    {
        return [
            '',
            'some string',
        ];
    }
}
