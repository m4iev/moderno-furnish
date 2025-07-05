<?php

$router->get('/', 'controllers/index.php');

$router->get('/product', 'controllers/product/show.php');

$router->get('/products', 'controllers/product/index.php');

$router->get('/login', 'controllers/login/login.php');
$router->post('/login', 'controllers/login/check.php');

$router->get('/logout', 'controllers/logout.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/cart', 'controllers/cart/show.php');
$router->post('/cart', 'controllers/cart/store.php');
$router->delete('/cart', 'controllers/cart/destroy.php');

$router->get('/history', 'controllers/history/show.php');

$router->get('/profile', 'controllers/profile/index.php');
$router->post('/profile', 'controllers/profile/store.php');

$router->get('/profile/edit', 'controllers/profile/edit.php');
$router->put('/profile/edit', 'controllers/profile/update.php');

$router->get('/checkout', 'controllers/checkout/store.php');

$router->get('/payment', 'controllers/payment/show.php');

$router->get('/proof', 'controllers/proof/create.php');
$router->post('/proof', 'controllers/proof/store.php');

$router->get('/dashboard', 'controllers/dashboard/index.php');

$router->get('/dashboard/item', 'controllers/dashboard/item.php');
$router->get('/dashboard/item/add', 'controllers/dashboard/item.create.php');
$router->post('/dashboard/item/add', 'controllers/dashboard/item.store.php');

$router->get('/dashboard/account', 'controllers/dashboard/account.php');
$router->delete('/dashboard/account', 'controllers/dashboard/account.destroy.php');

$router->get('/dashboard/transaction', 'controllers/dashboard/transaction.php');
$router->patch('/dashboard/transaction', 'controllers/dashboard/transaction.update.php');