<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = :id_akun', [
    'id_akun' => $_SESSION['user']['id']
])->find()['id'];

$keranjang_user = $db->query('SELECT * FROM keranjang WHERE id_pelanggan = :id_pelanggan', ['id_pelanggan' => $id_pelanggan])->get();

$transaction_name_array = [];
$total = 0;

foreach ($keranjang_user as $keranjang) {
    $item = $db->query('SELECT * FROM barang WHERE id = :id_barang', ['id_barang' => $keranjang['id_barang']])->find();
    $transaction_name_array[] = $keranjang['jumlah'];
    $transaction_name_array[] = $item['nama'] . ',';
    $total += $item['harga'] * $keranjang['jumlah'];
}

$last_element = array_search(end($transaction_name_array), $transaction_name_array);

$transaction_name_array[$last_element] = str_replace(',', '', $transaction_name_array[$last_element]);

$nama_transaksi = implode(' ', $transaction_name_array);

$db->query('INSERT INTO transaksi(nama, id_pelanggan, total_harga, status) VALUES (?, ?, ?, ?)', [
    $nama_transaksi,
    $id_pelanggan,
    $total,
    'Belum Dibayar'
]);

$id_transaksi = $db->getLastId();

$db->query('DELETE FROM keranjang WHERE id_pelanggan = ?', [
    $id_pelanggan
]);

header("location: /payment?id=$id_transaksi");
exit();