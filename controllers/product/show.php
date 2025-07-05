<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_GET['id'];

$product = $db->query('SELECT * FROM barang where id = :id', [
    'id' => $id
])->find();

view("product/show.view.php", [
    'product' => $product
]);