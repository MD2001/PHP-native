<?php

use Core\App;
use Core\Database;
use Core\Verification;


$error = [];
if (!Verification::email($_POST["email"])) {
    $error["email"] = "this email is not correct";
}
if (!Verification::string($_POST["password"], 3, 50)) {
    $error["password"] = "this password is not correct";
}


$db = App::resolve(Database::class);
$result = $db->quiery("select * from users where email=:email AND password = :password ", [
    "email" => $_POST["email"],
    "password" => $_POST["password"],
])->find();

if ($result) {
    $_SESSION["login"] = true;
    $_SESSION["userid"] = $result["id"];
    $_SESSION["name"] = $result["name"];
    header("location:/");
    exit();
} else {
    $error["email"] = "the email or password is wrong";
    $error["password"] = "";
}
if (!empty($error)) {
    view("registers/index.view.php", ["error" => $error]);
    exit();
}
