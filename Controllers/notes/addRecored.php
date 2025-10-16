<?php

use Core\Database;
use Core\Verification;

$config = require(base_path('config.php'));

$db = new Database($config['database']);
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
    }
}

view("notes/create.view.php", [
    "error" => $error
]);
