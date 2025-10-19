<?php
// dd($_GET);
use Core\App;
use Core\Database;

$userid = 1;

$db = App::resolve(Database::class);
$data = $db->quiery("select * from notes where id = :id", ["id" => (int)$_GET['id']])->findOrFail();
// dd($data);
Authorize((int)$_GET['userid'] === $data["user_id"]);
view("notes/edite.view.php", [

    "note" => $data["body"],
    "id" => $data["id"],
    "userid" => $data["user_id"],
]);
