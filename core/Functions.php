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
