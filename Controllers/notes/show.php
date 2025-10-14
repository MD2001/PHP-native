<?php

$config = require(base_path('config.php'));

$connection = new Database($config['database'], 'root');

$data = $connection->quiery("select * from notes where id = :id", ["id" => $_GET['id']])->findOrFail();

Authorize($data["user_id"] === 1);

view("notes/show.view.php", [
    "name" => "this is Note page",
    "data" => $data
]);
