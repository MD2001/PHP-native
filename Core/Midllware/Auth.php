<?php

namespace Core\Midllware;

class Auth
{
    public function handle()
    {
        if (!$_SESSION['login'] ?? false) {
            header("location:/");
            exit();
        }
    }
}
