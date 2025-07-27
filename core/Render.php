<?php

class Render
{
    public static function view($filename, $data=[])
    {
        extract($data, EXTR_SKIP);
        // Ganti titik menjadi slash
        $filename = str_replace('.', '/', $filename);
        require __DIR__ .'/../app/views/preview/'.$filename.'.php';
    }

    public static function json($data, $statusCode = 200)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}