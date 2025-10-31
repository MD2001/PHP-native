<?php

namespace Http\Forms;

use Core\Verification;

class Form
{
    public static function validate($email, $passowrd, &$error = null)
    {
        $loaclarr = []; //used as temporary array if error not provieded
        $errors = &$error ?? $loaclarr;
        if (!Verification::email($email)) {
            $errors["email"] = "this email is not correct";
        }
        if (!Verification::string($passowrd, 3, 50)) {
            $errors["password"] = "this password is not correct";
        }

        return empty($errors);
    }
}
