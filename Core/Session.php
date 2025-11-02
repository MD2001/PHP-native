<?php

namespace Core;

class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $defult = null)
    {

        return $_SESSION["__flash"][$key] ?? $_SESSION[$key] ?? $defult;
    }

    public static function found($key)
    {
        return (bool) static::get($key);
    }

    public static function flash($key, $value)
    {
        $_SESSION["__flash"][$key] = $value;
    }

    public static function unflash()
    {
        unset($_SESSION["__flash"]);
    }
}
