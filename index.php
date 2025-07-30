<?php
// Autoload semua class dari folder /core dan /app/controllers misalnya

spl_autoload_register(function ($class) {
    require_once "core/Autoload.php";

    $paths = [
        "core/$class.php",
        "app/controllers/$class.php",
        "app/models/$class.php",
        "vendor/" . str_replace('\\', '/', $class) . '.php', // ini penting
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});


require_once 'core/Router.php';
require_once 'app/route/app.php';
require_once 'app/route/docs.php';

$url = $_GET['url'] ?? '/';
$url = rtrim($url, '/'); // bersihkan trailing slash

Route::dispatch($url);