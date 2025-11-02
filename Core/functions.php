<?php

use Core\Responses;
use Core\Session;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($url)
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $path === $url;
}

function abort($code = Responses::NOTFOUND)
{
    http_response_code($code);

    require base_path("view/partials/{$code}.php");

    die();
}

function Authorize($condetion, $state = Responses::FORBIDN)
{
    if (! $condetion) {
        abort($state);
    }
}
function text_normalize($text)
{
    $text = trim($text);

    $text = preg_replace('/[ \t]+/', ' ', $text);

    $text = preg_replace('/(\r?\n)+/', "\n", $text);

    return $text;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
    if (Session::issetgetFlashArr()) {
        extract(Session::getFlashArr());
    }
    extract($attribute);
    require base_path("view/" . $path);
}
function redirect($path)
{
    header("location:{$path}");
    exit();
}
