<?php

use Core\Database;
use Core\App;

$connection = App::resolve(Database::class);
$data = $connection->quiery("select * from notes where id = :id", ["id" => $_GET['id']])->findOrFail();
Authorize($data["user_id"] === $_SESSION["userid"]);

view("notes/show.view.php", [
    "name" => "this is Note page",
    "data" => $data,
    "userid" => $_SESSION["userid"]
]);
