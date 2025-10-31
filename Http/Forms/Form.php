<?php

namespace Http\Forms;

use Core\Verification;

class Form
{
    public static function validate($email, $passowrd, &$error)
    {
        if (!Verification::email($_POST["email"])) {
            $error["email"] = "this email is not correct";
        }
        if (!Verification::string($_POST["password"], 3, 50)) {
            $error["password"] = "this password is not correct";
        }
    }
}
