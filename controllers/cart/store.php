<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_akun = (int) $_POST['id_akun'];
$id_barang = (int) $_POST['id_barang'];
$jumlah_barang = (int) $_POST['jumlah'];

$id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = :id_akun', [
    'id_akun' => $id_akun
])->find()['id'];

$barang_keranjang = $db->query('SELECT * FROM keranjang WHERE id_barang = ? AND id_pelanggan = ?', [$id_barang, $id_pelanggan])->find();

if ($barang_keranjang) {
    $item = $db->query('SELECT * FROM barang WHERE id = ?', [$id_barang])->find();

    $stok = $item['stok'];

    if (($barang_keranjang['jumlah'] + $jumlah_barang) <= $stok) {
        $db->query('UPDATE keranjang SET jumlah = ? WHERE id_barang = ? AND id_pelanggan = ?', [($barang_keranjang['amount'] + $jumlah_barang), $id_barang, $id_pelanggan]);
    } else {
        $db->query('UPDATE keranjang SET jumlah = ? WHERE id_barang = ? AND id_pelanggan = ?', [$stok, $id_barang, $id_pelanggan]);
    }

} else {
    $db->query('INSERT into keranjang(id_pelanggan, id_barang, jumlah) VALUES (?, ?, ?)', [
        $id_pelanggan,
        $id_barang,
        $jumlah_barang
    ]);
}

header("location: /cart");
exit();