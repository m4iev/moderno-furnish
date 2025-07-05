<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::username($username)) {
    $errors['username'] = 'Nama pengguna memerlukan 5 hingga 50 karakter tanpa simbol atau spasi';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Berikan E-mail yang sesuai';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Berikan kata sandi antara 7 hingga 255 karakter.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$user = $db->query('SELECT * FROM akun WHERE email = ?', [
    $email
])->find();


if ($user) {
    return view('login/login.view.php', [
        'error' => 'Akun sudah ada. Silahkan login.'
    ]);
} else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $db->query('INSERT INTO akun(username, email, password, tipe) VALUES (:username, :email, :password, :tipe)', [
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password,
        'tipe' => 'user'
    ]);

    $id = $db->getLastId();

    mkdir(base_path("public/img/users/$id"));

    $_SESSION['user'] = [
        'id' => $id,
        'username' => $username,
        'email' => $email
    ];

    header('location: /products');
    exit();
}