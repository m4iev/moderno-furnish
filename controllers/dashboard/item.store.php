<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar_barang = $_FILES['gambar_barang'];
$deskripsi = $_POST['deskripsi'];

try {
    $db->query('INSERT INTO barang(nama, kategori, merk, harga, stok, deskripsi) VALUES(?, ?, ?, ?, ?, ?)', [
        $nama,
        $kategori,
        $merk,
        $harga,
        $stok,
        $deskripsi
    ]);

    $id = $db->getLastId();

    mkdir(base_path("public/img/items/$id"));

    if (file_exists("img/items/$id/$id.png")) {
        abort(404);
    } else {
        move_uploaded_file($gambar_barang['tmp_name'], base_path("public/img/items/$id/$id.png"));

        header('location: /dashboard/item');
        exit();
    }
} catch (\Throwable $th) {
    throw $th;
}