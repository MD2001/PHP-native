<?php

use Core\Database;
use Core\App;

$connection = App::resolve(Database::class);
$data = $connection->quiery("select * from notes where user_id =1")->get();

view("notes/index.view.php", [
    "name" => "this is Notes page",
    "data" => $data
]);
