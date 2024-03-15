<?php

declare(strict_types=1);

namespace Tempest\Highlight\Patterns\Css;

use Tempest\Highlight\Pattern;
use Tempest\Highlight\Patterns\IsPattern;
use Tempest\Highlight\Tokens\TokenType;

final readonly class CssSelectorPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>[\@\-\#\.\w\s,\n]+)\{';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::KEYWORD;
    }
}
