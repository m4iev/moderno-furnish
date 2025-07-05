<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

if (isset($_SESSION['user'])) {
    $id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = :id_akun', [
        'id_akun' => $_SESSION['user']['id']
    ])->find()['id'];

    if ($id_pelanggan) {
        $transactions = $db->query('SELECT * FROM transaksi WHERE id_pelanggan = :id_pelanggan', [
            'id_pelanggan' => $id_pelanggan
        ])->get();

        view('history/show.view.php', [
            'transactions' => $transactions
        ]);
        exit();
    } else {
        header('location: /profile');
        exit();
    }


} else {
    header('Location: /login');
    exit();
}