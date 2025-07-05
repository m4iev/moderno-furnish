<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_akun = $_SESSION['user']['id'];
$id_transaksi = $_POST['id'];
$proof_picture = $_FILES['proof_picture'];

if (file_exists("img/users/$id_akun/proof_$id_akun" . "-$id_transaksi.png")) {
    abort(404);
} else {
    move_uploaded_file($proof_picture['tmp_name'], base_path("public/img/users/$id_akun/proof_$id_akun" . "-$id_transaksi.png"));

    // Remove Later
    $db->query('UPDATE transaksi SET status = ? WHERE id = ?', [
        'Dibayar',
        $id_transaksi
    ]);

    header('location: /history');
    exit();
}