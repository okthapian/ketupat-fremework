<?php

class Render
{
    protected static $sections = [];
    
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

    public static function component($filename, $data=[])
    {
        extract($data, EXTR_SKIP);
        // Ganti titik menjadi slash
        $filename = str_replace('.', '/', $filename);
        require __DIR__ .'/../app/views/components/'.$filename.'.php';
    }

    public static function template($filename, $data = [])
    {
        extract($data, EXTR_SKIP);
        $filename = str_replace('.', '/', $filename);
        require __DIR__ . '/../app/views/template/' . $filename . '.php';
    }

    public static function setcontent($key, $callback)
    {
        // Mulai output buffering
        ob_start();
        if (is_callable($callback)) {
            $callback(); // Jika fungsi
        } elseif (is_array($callback)) {
            foreach ($callback as $line) {
                echo $line; // Jika array HTML seperti di pertanyaan
            }
        }
        self::$sections[$key] = ob_get_clean();
    }

    public static function getcontent($key)
    {
        echo self::$sections[$key] ?? '';
    }
}