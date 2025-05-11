<?php
namespace PhpValidator\Rules;

class Min
{
    public static function name(): string
    {
        return 'min';
    }

    public static function validate($value, array $params = []): bool
    {
        $minLength = (int)$params[0] || 0;
        return strlen($value ?? '') >= $minLength;
    }
}