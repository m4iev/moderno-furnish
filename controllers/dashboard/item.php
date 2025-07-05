<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$items = $db->query('SELECT * FROM barang')->get();

view('dashboard/item.view.php', [
    'items' => $items
]);