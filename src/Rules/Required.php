<?php

namespace PhpValidator\Rules;

class Required
{
    public static function name(): string
    {
        return 'required';
    }

    public static function validate($value, array $params = []): bool
    {
        return !empty($value);
    }
}