<?php

namespace Core;

class Verification
{

    public static function string($value, $min = 1, $max = INF)
    {

        $value = strlen(text_normalize($value));
        return $value >= $min && $value <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
