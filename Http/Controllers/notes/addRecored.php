<?php

use Core\App;
use Core\Database;
use Core\Verification;

$db = App::resolve(Database::class);
$error = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {


    if (!Verification::string($_POST["about"], 1, 1000)) {
        $error["about"] = "this field is require less than 1,000 character";
    }

    if (empty($error)) {
        $db->quiery(
            "INSERT INTO notes (body, user_id) VALUES (:body, :id)",
            [
                "body" => text_normalize($_POST["about"]),
                "id" => 1
            ]
        );
        $_POST["about"] = '';

        header("Location: /notes");
        exit;
    }
}

view("notes/create.view.php", [
    "error" => $error
]);
