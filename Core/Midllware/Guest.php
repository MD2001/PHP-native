<?php

namespace Core\Midllware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['login'] ?? false) {
            header("location:/");
            exit();
        }
    }
}
