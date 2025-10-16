<?php

use Core\Database;

$config = require(base_path('config.php'));

$connection = new Database($config['database'], 'root');

$data = $connection->quiery("select * from notes where id = :id", ["id" => $_POST['id']])->findOrFail();

Authorize($data["user_id"] === 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection->quiery("DELETE from notes where id = :id", ["id" => $_POST["id"]]);

    header("Location: /notes");
    exit;
}else
{
    abort();
}