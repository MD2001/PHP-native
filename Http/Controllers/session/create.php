<?php

//you get from post request the email and pssword

use Core\App;
use Core\Database;
use Http\Forms\Form;


$error = [];
Form::validate($_POST["email"], $_POST["password"], $error);

if (empty($error)) {
    $db = App::resolve(Database::class);
    $email = $db->quiery("select * from users where email=:email", [
        "email" => $_POST["email"],
    ])->find();

    if ($email && (password_verify($_POST["password"], $email["password"]))) {
        $_SESSION = []; ## just for make sure no dublication
        $_SESSION["login"] = true;
        $_SESSION["userid"] = $email["id"];
        $_SESSION["name"] = $email["name"];
        header("location:/");
        exit();
    } else {
        if ($email) {
            $error["password"] = "this password not correct";
        } else {
            $error["email"] = "this email not found";
        }
    }
}

view("session/index.view.php", [
    "error" => $error,
    "email" => $_POST["email"],
]);
exit();
