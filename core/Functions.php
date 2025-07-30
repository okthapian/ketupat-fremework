<?php

if (!function_exists('get_assets')) {
    function get_assets($filename)
    {
        return  __DIR__ . '/../assets/' . $filename;
    }
}


if (!function_exists('config')) {
    function config($key)
    {
        static $configs = [];

        $parts = explode('.', $key);
        $file = array_shift($parts); // Ambil nama file

        // Load file hanya sekali
        if (!isset($configs[$file])) {
            $path = __DIR__ . "/../app/config/{$file}.php";
            if (file_exists($path)) {
                $configs[$file] = require $path;
            } else {
                $configs[$file] = [];
            }
        }

        // Telusuri array berdasarkan key berikutnya
        $value = $configs[$file];

        foreach ($parts as $part) {
            if (is_array($value) && isset($value[$part])) {
                $value = $value[$part];
            } else {
                return null; // Key tidak ditemukan
            }
        }

        return $value;
    }
}

if(!function_exists('get_home_url')){
    function get_home_url(){
        return config('site.home_url');
    }
}

if (!function_exists('p')) {
    // Cetak string tanpa HTML
    function p($text)
    {
        echo htmlspecialchars(strip_tags($text));
    }
}

if (!function_exists('pp')) {
    // Cetak mentah (boleh HTML)
    function pp($text)
    {
        echo $text;
    }
}

if (!function_exists('pre')) {
    // Cetak dengan <pre>, dukung array/object/string
    function pre($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    // Dump dan die
    function dd($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}
