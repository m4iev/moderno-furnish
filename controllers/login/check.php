<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$user = $db->query('SELECT * FROM akun WHERE email = ?', [
    $email
])->find();


if ($user) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $username,
            'email' => $email
        ];

        if ($user['tipe'] === 'admin') {
            header('location: /dashboard');
            exit();
        } else {
            header('Location: /');
            exit();
        }
    } else {
        return view('login/login.view.php', [
            'error' => 'Kata sandi salah'
        ]);
    }
} else {
    return view('login/login.view.php', [
        'error' => 'Akun tidak ada'
    ]);
}