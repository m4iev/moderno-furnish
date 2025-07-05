<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query('SELECT * FROM akun WHERE tipe = ?', ['user'])->get();

view('dashboard/account.view.php', [
    'users' => $users
]);