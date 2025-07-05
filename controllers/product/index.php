<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];

    $products = $db->query('SELECT * FROM barang WHERE kategori = ?', [
        $kategori
    ])->get();
} elseif (isset($_GET['search'])) {
    $search = $_GET['search'];

    $products = $db->query('SELECT * FROM barang WHERE nama LIKE ?', [
        '%' . str_replace('"', '', $search)  . '%'
    ])->get();
} else {
    $products = $db->query('SELECT * FROM barang')->get();
}

view("product/index.view.php", [
    'products' => $products
]);