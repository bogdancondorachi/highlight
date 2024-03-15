<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Patterns\Php;

use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Patterns\Php\ConstantPropertyPattern;
use Tempest\Highlight\Tests\Patterns\TestsPatterns;

class ConstantPropertyPatternTest extends TestCase
{
    use TestsPatterns;

    public function test_pattern()
    {
        $this->assertMatches(
            pattern: new ConstantPropertyPattern(),
            content: 'Foo::BAR',
            expected: 'BAR',
        );

        $this->assertMatches(
            pattern: new ConstantPropertyPattern(),
            content: 'Foo::BAR()',
            expected: 'BAR',
        );
    }
}
