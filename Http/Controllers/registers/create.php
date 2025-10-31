<?php

use Http\Forms\Form;
use Http\Forms\Authorizor;

$email = $_POST["email"];
$password = $_POST["password"];

$error = [];
if (Form::validate($email, $password, $error)) {

    $form = new Authorizor();

    if ($form->attempt($email,  $password, $error)) {
        $form->adduser($email, $password);
    }
}
view("registers/index.view.php", [
    "error" => $error,
    "email" => $email
]);
exit();
