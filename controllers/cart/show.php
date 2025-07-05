<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

if (isset($_SESSION['user'])) {
    $id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = :id_akun', [
        'id_akun' => $_SESSION['user']['id']
    ])->find()['id'];

    if ($id_pelanggan) {
        $keranjang_user = $db->query('SELECT * FROM keranjang WHERE id_pelanggan = :id_pelanggan', ['id_pelanggan' => $id_pelanggan])->get();
        
        if (!empty($keranjang_user)) {
            $items = [];
            $total = 0;

            foreach ($keranjang_user as $keranjang) {
                $item = $db->query('SELECT * FROM barang WHERE id = :id_barang', ['id_barang' => $keranjang['id_barang']])->find();
                $items[] = $item;
                $total += $item['harga'] * $keranjang['jumlah'];
            }

            view('cart/show.view.php', [
                'carts' => $keranjang_user,
                'items' => $items,
                'total' => $total
            ]);
        } else {
            view('cart/show.view.php');
            exit();
        }
    } else {
        header('location: /profile');
        exit();
    }
} else {
    header('Location: /login');
    exit();
}