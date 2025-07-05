<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$items = $db->query('SELECT * FROM barang')->get();

$users = $db->query('SELECT * FROM akun WHERE tipe = "user"')->get();

$transactions = $db->query('SELECT * FROM transaksi')->get();

view('dashboard/index.view.php', [
    'items_count' => count($items),
    'users_count' => count($users),
    'transactions_count' => count($transactions)
]);