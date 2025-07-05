<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id_akun = (int) $_POST['id'];

$id_pelanggan = $db->query('SELECT id FROM pelanggan WHERE id_akun = ?', [$id_akun])->find()['id'];

if ($id_pelanggan) {
    unset($_SESSION['user']);

    // Delete user cart
    $user_carts = $db->query('SELECT * FROM keranjang WHERE id_pelanggan = ?', [$id_pelanggan])->get();
    if (count($user_carts) > 0) {
        $db->query('DELETE FROM keranjang WHERE id_pelanggan = ?', [$id_pelanggan]);
    }

    // Delete user transaction
    $user_transactions = $db->query('SELECT * FROM transaksi WHERE id_pelanggan = ?', [$id_pelanggan])->get();
    if (count($user_transactions) > 0) {
        $db->query('DELETE FROM transaksi WHERE id_pelanggan = ?', [$id_pelanggan]);
    }

    // Delete customer data
    $db->query('DELETE FROM pelanggan WHERE id = ?', [$id_pelanggan]);

    // Delete account
    $db->query('DELETE FROM akun WHERE id = ?', [$id_akun]);

    rmdir(base_path("public/img/users/$id_akun"));

    header('location: /dashboard/account');
    exit();
} else {
    // Delete account
    $db->query('DELETE FROM akun WHERE id = ?', [$id_akun]);

    header('location: /dashboard/account');
    exit();
}