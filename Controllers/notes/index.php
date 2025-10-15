<?php

use Core\Database;

$config = require(base_path('config.php'));

$connection = new Database($config['database'], 'root');
$data = $connection->quiery("select * from notes where user_id =1")->get();

view("notes/index.view.php", [
    "name" => "this is Notes page",
    "data" => $data
]);
