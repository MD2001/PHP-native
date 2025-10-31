<?php

use Core\App;
use Core\Database;
use Http\Forms\Form;

$error = [];
Form::validate($_POST["email"], $_POST["password"], $error);


$db = App::resolve(Database::class);
$email = $db->quiery("select email from users where email=:email", [
    "email" => $_POST["email"],
])->find();
if (empty($error)) {
    if ($email) {

        $error["email"] = "this email is used";
    } else {
        $db->quiery("INSERT INTO users (email, password) VALUES (:email, :password)", [
            "email" => $_POST["email"],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
        ]);
        $_SESSION["login"] = true;
        $_SESSION["userid"] = $result["id"];
        $_SESSION["name"] = $result["name"];
        header("location:/");
        exit();
    }
}

view("registers/index.view.php", [
    "error" => $error,
    "email" => $_POST["email"]
]);
exit();
