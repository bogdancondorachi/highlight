<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Patterns\Css;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Patterns\Css\CssCommentPattern;
use Tempest\Highlight\Tests\Patterns\TestsPatterns;

class CssCommentPatternTest extends TestCase
{
    use TestsPatterns;

    #[Test]
    public function test_pattern()
    {
        $this->assertMatches(
            pattern: new CssCommentPattern(),
            content: '
    /* 1 */
    font-feature-settings: normal;
    /* 2 */
    font-variation-settings: normal;
',
            expected: ['/* 1 */', '/* 2 */'],
        );

        $this->assertMatches(
            pattern: new CssCommentPattern(),
            content: 'abc /* 1 */;',
            expected: '/* 1 */',
        );
    }
}
