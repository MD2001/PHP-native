<?php

use Core\Database;
use Core\App;

$connection = App::resolve(Database::class);

$data = $connection->quiery("select * from notes where id = :id", ["id" => $_POST['id']])->findOrFail();

Authorize($data["user_id"] === $_SESSION["userid"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection->quiery("DELETE from notes where id = :id", ["id" => $_POST["id"]]);

    header("Location: /notes");
    exit;
} else {
    abort();
}
