<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_transaksi = $_POST['id'];
$status = $_POST['status'];

$db->query('UPDATE transaksi SET status = ? WHERE id = ?', [
    $status,
    $id_transaksi
]);

header('location: /dashboard/transaction');
exit();