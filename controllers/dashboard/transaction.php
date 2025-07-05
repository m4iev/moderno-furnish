<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$transactions = $db->query('SELECT * FROM transaksi')->get();

if ($transactions) {
    $accounts_id = [];

    foreach ($transactions as $transaction) {
        $accounts_id[] = $db->query('SELECT id_akun FROM pelanggan WHERE id = ?', [
            $transaction['id_pelanggan']
        ])->find()['id_akun'];
    }

    view('dashboard/transaction.view.php', [
        'transactions' => $transactions,
        'accounts_id' => $accounts_id
    ]);
} else {
    view('dashboard/transaction.view.php');
}