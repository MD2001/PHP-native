<?php

namespace Core;

class Session
{
    protected static $flash = "__flash";

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $defult = null)
    {

        return $_SESSION[static::$flash][$key] ?? $_SESSION[$key] ?? $defult;
    }

    public static function found($key)
    {
        return (bool) static::get($key);
    }

    public static function flash($key, $value)
    {
        $_SESSION[static::$flash][$key] = $value;
    }

    public static function unflash()
    {
        unset($_SESSION[static::$flash]);
    }

    public static function destroy()
    {
        session_unset();
        session_destroy();
    }

    public static function getFlashArr()
    {
        return $_SESSION[static::$flash] ?? null;
    }

    public static function issetgetFlashArr()
    {
        return (bool) static::getFlashArr();
    }
}
