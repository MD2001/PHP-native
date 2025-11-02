<?php

use Core\Session;
use Http\Forms\Form;
use Http\Forms\Authorizor;

$email = $_POST["email"];
$password = $_POST["password"];

$error = [];
if (Form::validate($email, $password, $error)) {

    $form = new Authorizor();

    if ($form->foundemail($email, true, $error)) {
        $form->adduser($email, $password);
    }
}

Session::flash("error", $error);
Session::flash("email", $email);

redirect("/register");
