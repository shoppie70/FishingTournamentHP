<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;


final class FormType extends Enum
{
    public const DONATION_FORM = 0;
    public const COMMON_FORM = 1;

    public static function getDescription($value): string
    {
        if ($value === self::DONATION_FORM) {
            return '寄付・協賛についてのお問い合わせ';
        }

        if ($value === self::COMMON_FORM) {
            return 'お問い合わせ';
        }

        return parent::getDescription($value);
    }

    public static function getValue(string $key): int
    {
        if ($key === '寄付・協賛についてのお問い合わせ') {
            return self::DONATION_FORM;
        }

        if ($key === 'お問い合わせ') {
            return self::COMMON_FORM;
        }

        return parent::getValue($key);
    }
}
