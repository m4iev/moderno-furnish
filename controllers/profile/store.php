<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_akun = $_SESSION['user']['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$db->query('INSERT INTO pelanggan(id_akun, nama, no_telp, jenis_kelamin, tanggal_lahir, alamat) VALUES(:id_akun, :nama, :no_telp, :jenis_kelamin, :tanggal_lahir, :alamat)', [
    'id_akun' => $id_akun,
    'nama' => $nama,
    'no_telp' => $no_telp,
    'jenis_kelamin' => $jenis_kelamin,
    'tanggal_lahir' => $tanggal_lahir,
    'alamat' => $alamat
]);

header('location: /profile');
exit();