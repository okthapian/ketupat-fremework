<?php
// Autoload semua class dari folder /core dan /app/controllers misalnya
spl_autoload_register(function ($class) {
    require_once "core/Autoload.php";
    if (file_exists("core/$class.php")) {
        require_once "core/$class.php";
    } elseif (file_exists("app/controllers/$class.php")) {
        require_once "app/controllers/$class.php";
    } elseif (file_exists("app/models/$class.php")) {
        require_once "app/models/$class.php";
    }
});

require_once 'core/Router.php';
require_once 'route/app.php';

$url = $_GET['url'] ?? '/';
$url = rtrim($url, '/'); // bersihkan trailing slash

Route::dispatch($url);