<?php

declare(strict_types=1);

namespace Mckenziearts\Icons\Untitledui\Enums;

use Filafly\Icons\Contracts\StyleEnum;

enum UntitleduiStyle: string implements StyleEnum
{
    case Regular = '';

    public function getStyleName(): string
    {
        return match ($this) {
            self::Regular => '',
        };
    }

    public function getEnumSuffix(): string
    {
        return match ($this) {
            self::Regular => 'Regular',
        };
    }

    public static function getStyleNames(): array
    {
        return ['regular'];
    }

    public static function fromStyleName(string $styleName): ?self
    {
        return match (strtolower($styleName)) {
            '' => self::Regular,
            default => null,
        };
    }
}