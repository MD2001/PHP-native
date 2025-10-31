<?php

use Core\Database;
use Core\App;

$connection = App::resolve(Database::class);
$data = $connection->quiery("select * from notes where user_id =:userid", [
    "userid" => $_SESSION["userid"],
])->get();

view("notes/index.view.php", [
    "name" => "this is Notes page",
    "data" => $data
]);
