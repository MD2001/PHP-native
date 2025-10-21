<?php

use Core\App;
use Core\Database;
use Core\Verification;


$error = [];
// verify the email and chick if it is eamil or not (text only)
if (!Verification::email($_POST["email"])) {
    $error["email"] = "this email is not correct";
}
// verify password more than 3 char
if (!Verification::string($_POST["password"], 3, 50)) {
    $error["password"] = "this password is not correct";
}
//chick if the email in your data base if not add it 
$db = App::resolve(Database::class);
$result = $db->quiery("select * from users where email=:email AND password = :password ", [
    "email" => $_POST["email"],
    "password" => $_POST["password"],
])->find();

if ($result) {
    // login and go the home page & update session whith name
    $_SESSION["login"] = true;
    $_SESSION["userid"] = $result["id"];
    $_SESSION["name"] = $result["name"];
    header("location:/");
    exit();
} else {
    dd($result);
}
