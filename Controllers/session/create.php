<?php

//you get from post request the email and pssword

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
$email = $db->quiery("select * from users where email=:email", [
    "email" => $_POST["email"],
])->find();



if ($email && (password_verify($_POST["password"],$email["password"]))) {
    $_SESSION["login"] = true;
    $_SESSION["userid"] = $result["id"];
    $_SESSION["name"] = $result["name"];
    header("location:/");
    exit();
} else {
    if ($email) {
        $error["password"] = "this password not correct";
    } else {
        $error["email"] = "this email not found";
    }
}

if (!empty($error)) {
    view("session/index.view.php", [
        "error" => $error,
        "email" => $_POST["email"],
    ]);
    exit();
}
