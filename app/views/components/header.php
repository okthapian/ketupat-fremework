<!DOCTYPE html>
<html lang="<?php echo !empty($lang)?$lang:config('lang');?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <?php 
    $seo_args = ['meta_title'=>'nyamding'];
    seo::meta_tags($seo_args);

    $seo_icon = ['icon'=>['https://nyamding.vercel.app/asset/img/nyamdinglogokotak.png']];
    seo::favicon($seo_icon);
    ?>

    
    <link rel="stylesheet" href="<?php echo get_assets('css/main.css');?>">
    
    <?php
    $tailwind_args = [
        'font' => 'Archivo',
        'colors' => [
            'transparent' => 'colors.transparent',
            'bk' => 'colors.black',
            'we' => 'white',
            'c0' => 'colors.gray',
            'c1' => 'colors.amber',
            'c2' => 'colors.yellow',
            'c3' => 'colors.blue',
            'gn' => 'colors.green',
            'oe' => 'colors.orange',
        ],
        'darkMode' => 'class',
        'screens' => [
            'xs' => '400px',
            'sm' => '640px',
            'md' => '768px',
            'lg' => '1024px',
            'xl' => '1280px',
            '2xl' => '1536px',
        ],
    ];
    TailwindConfig::set($tailwind_args)->render();
    ?>
</head>
<body>