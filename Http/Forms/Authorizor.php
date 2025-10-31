<?php

namespace Http\Forms;

use Core\App;
use Core\Database;

class Authorizor
{
    public function attempt($email, $password, &$error)
    {
        $localerror = [];

        $errors = &$error ?? $localerror;

        $db = App::resolve(Database::class);
        $email = $db->quiery("select email from users where email=:email", [
            "email" => $_POST["email"],
        ])->find();

        if ($email) {

            $errors["email"] = "this email is used";
        }

        return empty($errors);
    }

    public function login(...$data)
    {
        $_SESSION["login"] = true;

        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
        redirect("/");
    }

    public function adduser($email, $password)
    {
        $db = App::resolve(Database::class);
        $db->quiery("INSERT INTO users (email, password) VALUES (:email, :password)", [
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ]);
        $email = $db->quiery("select email from users where email=:email", [
            "email" => $_POST["email"],
        ])->find();
        $this->login([
            "id" => $email["id"],
            "name" => $email["name"],
        ]);
    }
}
