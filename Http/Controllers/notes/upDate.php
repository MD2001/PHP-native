<?php

use Core\App;
use Core\Verification;
use Core\Database;

$error = [];
$text = text_normalize($_POST["about"]);
if (!Verification::string($text, 1, 1000)) {
    $error["about"] = "the text shoud be less than 1,000 char";
}

$db = App::resolve(Database::class);
$data = $db->quiery("select * from notes where id = :id", ["id" => (int)$_POST['id']])->findOrFail();

Authorize((int)$_POST['userid'] === $data["user_id"]);

if (empty($error)) {

    $db->quiery("UPDATE `notes` SET body = :text WHERE id = :id", [
        "text" => $text,
        "id" => $_POST['id']
    ]);

    header("Location: /notes");
    exit;
}
