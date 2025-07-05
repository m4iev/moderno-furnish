<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

if (isset($_SESSION['user'])) {
    $customer = $db->query('SELECT * FROM pelanggan WHERE id_akun = :id', [
        'id' => $_SESSION['user']['id']
    ])->find();

    if ($customer) {
        view('profile/show.view.php', [
            'customer' => $customer
        ]);
    } else {
        view('profile/create.view.php');
    }
} else {
    header('location: /login');
    exit();
}