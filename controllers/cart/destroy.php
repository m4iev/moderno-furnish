<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_keranjang = $_POST['id_keranjang'];

$db->query('DELETE FROM keranjang WHERE id = :id_keranjang', ['id_keranjang' => $id_keranjang]);

header('location: /cart');