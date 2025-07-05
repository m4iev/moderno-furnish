<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = ?', [
    $_SESSION['user']['id']
])->find()['id'];

$payment = $db->query('SELECT status FROM transaksi WHERE id = ?', [
    $_GET['id']
])->find()['status'];

if ($payment) {
    if ($payment !== 'Belum Dibayar') {
        abort(404);
    } else {
        view('proof/create.view.php');
        exit();
    }
} else {
    abort();
}

