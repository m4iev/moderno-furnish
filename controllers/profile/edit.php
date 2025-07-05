<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$customer = $db->query('SELECT * FROM pelanggan where id_akun = :id', [
    'id' => $_SESSION['user']['id']
])->find();

view('profile/edit.view.php', [
    'customer' => $customer
]);