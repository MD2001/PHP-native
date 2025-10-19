<?php

use Core\Database;
use Core\App;

$connection = App::resolve(Database::class);
$data = $connection->quiery("select * from notes where id = :id", ["id" => $_GET['id']])->findOrFail();
$userid = 1;
Authorize($data["user_id"] === $userid);

view("notes/show.view.php", [
    "name" => "this is Note page",
    "data" => $data,
    "userid" => $userid
]);
