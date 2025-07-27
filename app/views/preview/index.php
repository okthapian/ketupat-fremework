<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Nyamding - Jagonya Puding Aneka Rasa | Nikmat | Bikin Nagih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Nikmati pengalaman berbeda menikmati puding aneka varian, Puding sehat dan enak, yang sangat cocok untuk anda" name="description">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='robots' content='index, follow' />

    <link href="https://nyamding.vercel.app/" rel="canonical" />
    <link rel="icon" type="image/svg+xml" href="https://nyamding.vercel.app/asset/img/nyamdinglogokotak.png">
    <link rel="mask-icon" href="https://nyamding.vercel.app/asset/img/nyamdinglogokotak.png">

    <meta content="id" property="og:locale" />
    <meta content="Nyamding" property="og:site_name" />
    <meta content="Nyamding - Jagonya Puding Aneka Rasa | Nikmat | Bikin Nagih" property="og:title" />
    <meta content="https://nyamding.vercel.app/asset/img/nyamdinghome.png" property="og:image" />
    <meta content="Nyamding" name="twitter:site" />
    <meta content="Nyamding - Jagonya Puding Aneka Rasa | Nikmat | Bikin Nagih" name="twitter:title" />
    <meta content="https://nyamding.vercel.app/asset/img/nyamdinghome.png" name="twitter:image" />

    
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
    <header class="z-40 sticky top-0  bg-we">
        <div class="border-b border-c0-200 shadow-sm">
            <div class=" flex justify-center items-center gap-x-6 overflow-hidden bg-c1-800 px-6 py-2">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                    <p class="text-sm text-c1-100">
                        <?php echo get_home_url();?>, Sedia puding dengan varian terlengkap di Sidoarjo
                    </p>
                </div>
            </div>
    
            <div class="px-4 max-w-7xl mx-auto py-4">
                <div class="flex w-full justify-between items-center">
                    <a href="https://nyamding.vercel.app/" class="flex items-center space-x-2">
                        <img class="h-10 w-auto" src="https://nyamding.vercel.app/asset/img/nyamdinglogokotak.png">
                        <span class="text-2xl font-semibold text-c0-700 tracking-wide">NYAM
                            <span class="text-c1-700">DING</span>
                        </span>
                    </a>
    
    
                    <div class="flex items-center space-x-6">
                        <div class="hidden md:flex items-center space-x-6">
                            <div class="relative text-sm text-c0-800 hover:text-c1-500 font-semibold">
                                <a href="/katalog/">
                                    Katalog
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
    
                            <div class="relative text-sm text-c0-800 hover:text-c1-500 font-semibold">
                                <a href="/blog/">
                                    Blog &amp; Artikel
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
    
                            <div class="relative text-sm text-c0-800 hover:text-c1-500 font-semibold">
                                <a href="#kontak">
                                    Kontak
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
    
                            <div class="relative text-sm text-c0-800 hover:text-c1-500 font-semibold">
                                <a href="#media-sosial">
                                    Media Sosial
                                    <span class="absolute inset-0"></span>
                                </a>
                            </div>
                        </div>
                        <div class="md:hidden">
                            <div class="btn-menu-mobile group cursor-pointer">
                                <svg class="w-8 h-8 text-c1-600 group-hover:text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                            </div>
                        </div>
                        <div>
                            <a href="#tentang" class="flex items-center bg-c1-500 p-2 rounded-full text-sm text-we font-semibold">
                                <span>
                                    <svg fill="currentColor"
                                    class="w-6 h-6 text-we" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 512 512"  xml:space="preserve">
                                    <path fill-rule="evenodd" d="M489.35,251.974c-11.007-12.868-25.844-24.682-44.126-35.111l1.092-5.022l-0.431-1.83l-0.176-0.046
                                        c0.315-3.238,0.561-6.538,0.738-9.945c0.484-10.098,0.484-20.489,0.484-30.965c0-15.229-6.107-30.235-17.66-43.395
                                        c-15.39-17.49-39.087-31.596-70.422-41.933c-30.55-9.976-66.107-15.26-102.849-15.268c-49.109,0.038-95.542,9.43-130.73,26.436
                                        c-17.998,8.73-32.304,19.082-42.564,30.812c-11.537,13.152-17.628,28.134-17.621,44.164c0,12.922,0,26.251,1.07,39.103l-0.5,0.077
                                        l1.207,7.784c-18.367,10.476-33.273,22.328-44.31,35.265C7.792,269.38-0.007,288.915,0,308.598
                                        c-0.007,19.02,7.353,37.91,21.19,54.793l-0.061,0.046l1.507,1.777l0.007,0.008c20.39,23.789,52.017,43.003,94.027,57.147
                                        c41.31,13.844,89.489,21.167,139.337,21.174c66.523-0.046,129.338-13.022,176.879-36.557c23.966-11.906,42.956-25.958,56.47-41.772
                                        c14.791-17.29,22.628-36.826,22.643-56.662C512.008,288.87,504.178,269.302,489.35,251.974z M206.938,126.181l50.301-27.127
                                        l47.825,25.789v18.975l-50.302,27.127l-47.824-25.781V126.181z M150.752,270.871c-17.252-7.122-31.796-16.159-42.034-26.135
                                        c-2.8-2.723-5.399-5.661-7.714-8.76l0.354-0.385l-2.731-2.992c-3.454-5.291-5.799-10.798-6.976-16.259
                                        c-0.754-4.669-1.3-10.291-1.623-16.714c14.075,18.736,40.864,34.419,76.391,44.602v51.956c0,10.752,8.752,19.505,19.506,19.505
                                        c10.76,0,19.505-8.753,19.505-19.505v-23.359c0-4.369,3.554-7.922,7.922-7.922c4.369,0,7.907,3.554,7.907,7.922
                                        c0,9.161,7.461,16.606,16.621,16.606c9.16,0,16.606-7.445,16.606-16.606v-16.736l1.522,0.015
                                        c75.114,0,140.506-22.474,165.957-56.454c-0.146,2.846-0.331,5.607-0.562,8.244c-0.231,2.461-0.507,4.792-0.8,6.838
                                        c-1.646,6.822-4.615,13.429-8.923,19.729l-0.999,1.23l0.1,0.1c-1.885,2.631-3.854,5.053-6.007,7.392
                                        c-12.937,13.967-32.919,25.566-57.793,33.565c-25.997,8.384-57.416,12.814-90.974,12.814h-1.722v17.46h1.722
                                        c47.486-0.016,89.674-8.261,122.008-23.836c16.152-7.806,29.466-17.275,39.549-28.142c1.407-1.508,2.746-3.069,4.023-4.646
                                        c0.346,1.63,0.569,3.838,0.684,6.661c0.184,4.054,0.184,9.538,0.184,16.998c-0.008,9.26-3.907,18.444-11.606,27.296
                                        c-11.999,13.799-33.173,26.151-59.624,34.773c-28.089,9.191-60.993,14.06-95.42,14.06c-44.787,0-88.481-8.737-119.886-23.974
                                        c-14.836-7.192-26.858-15.791-34.756-24.859c-7.7-8.852-11.607-18.036-11.622-27.296c-0.024-13.168,0.084-19.821,0.823-23.397
                                        c1.908,2.246,3.976,4.453,6.176,6.607c12.038,11.667,28.027,21.682,47.556,29.742l1.585,0.662l6.661-16.136L150.752,270.871z
                                        M470.744,349.339c-16.852,19.844-46.395,37.534-83.19,49.84c-38.849,13.022-84.344,19.906-131.677,19.906
                                        c-62.838,0-121.747-12.075-165.888-34.012c-20.728-10.276-37.58-22.628-48.725-35.734c-11.138-13.091-16.79-26.796-16.798-40.741
                                        c0.008-13.899,5.638-27.582,16.728-40.65c8.546-10.06,20.121-19.467,34.45-28.012c-0.654,1.369-1.2,2.768-1.63,4.192
                                        c-0.976,3.3-1.484,6.822-1.73,12.145c-0.2,4.614-0.2,10.253-0.2,17.782c-0.008,13.468,5.499,26.882,15.928,38.78
                                        c14.314,16.329,37.604,30.12,67.323,39.88c29.843,9.761,64.646,14.922,100.672,14.929c48.079-0.023,93.419-9.16,127.67-25.734
                                        c17.159-8.323,30.726-18.114,40.318-29.074c10.422-11.906,15.929-25.32,15.921-38.78l-0.008-3.13
                                        c-0.007-11.36-0.015-18.213-1.284-24.313c-0.484-2.353-1.253-4.592-2.261-6.661c14.299,8.523,25.836,17.89,34.365,27.905
                                        c11.145,13.106,16.798,26.812,16.806,40.742C487.526,322.542,481.874,336.248,470.744,349.339z"/>
                               
                                </svg>
    
                                </span>
                                <span class="pl-2 hidden md:flex">Tentang Kami</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-mobile md:hidden hidden">
            <div class="border-b border-c0-200 shadow-sm">
                <div class="px-4 max-w-7xl mx-auto py-4 space-y-4">
                    <div class="space-y-2">
                        <div class="text-base font-semibold text-c1-800">
                            Fitur dan Layanan
                        </div>
                        <div class="space-y-2">
                            <a href="/katalog/" class="flex w-full items-center space-x-2 px-2 py-2 bg-c1-100 border border-c1-300 rounded-full text-sm text-c1-800">
                                <svg class="w-6 h-6 text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5l0 39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9l0 39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7l0-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1L257 256c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                </svg>
                                <span>Katalog Produk</span>
                            </a>
                            <a href="/blog/" class="flex w-full items-center space-x-2 px-2 py-2 bg-c1-100 border border-c1-300 rounded-full text-sm text-c1-800">
                                <svg class="w-6 h-6 text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5l0 39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9l0 39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7l0-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1L257 256c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                </svg>
                                <span>Blog & Artikel</span>
                            </a>
                            <a href="#kontak" class="flex w-full items-center space-x-2 px-2 py-2 bg-c1-100 border border-c1-300 rounded-full text-sm text-c1-800">
                                <svg class="w-6 h-6 text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5l0 39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9l0 39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7l0-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1L257 256c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                </svg>
                                <span>Kontak</span>
                            </a>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-base font-semibold text-c1-800">
                            Menu Lainnya
                        </div>
                        <div class="space-y-2">
                            <a href="#tentang" class="flex w-full items-center space-x-2 px-2 py-2 bg-c1-100 border border-c1-300 rounded-full text-sm text-c1-800">
                                <svg class="w-6 h-6 text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                </svg>
                                <span>Tentang Kami</span>
                            </a>
                            <a href="#" class="flex w-full items-center space-x-2 px-2 py-2 bg-c1-100 border border-c1-300 rounded-full text-sm text-c1-800">
                                <svg class="w-6 h-6 text-c1-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"></path>
                                </svg>
                                <span>Pesan Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="py-6 lg:py-16  relative">
            <div
                class="absolute inset-0 blur-[60px] bg-gradient-to-l from-orange-600/20 via-orange-600/5 to-orange-600/0">
            </div>
            <div class="max-w-7xl mx-auto relative">
                <div class="grid lg:grid-cols-2 items-center">
                    <div class="py-20 px-10">
                        <div class="flex items-center justify-center lg:justify-start order-last lg:order-first z-10">
                            <div class="text-center lg:text-start">
                                <span class="inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-600/30 mb-8 lg:mb-2">#Special
                                    Food 🍮</span>
                                <h1
                                    class="lg:text-6xl/normal md:text-5xl/snug text-3xl font-bold text-c0-950 capitalize mb-5">
                                    Ngemil
                                    <span class="inline-flex relative">
                                        <span>Puding</span>
                                        <img src="data:image/png;base64,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"
                                            class="absolute -z-10 h-full w-full lg:flex hidden">
                                    </span>
                                    <span class="text-c1-500">Asik</span> dan Bikin Nagih
                                </h1>
                                <p class="text-lg text-c0-700 font-medium mb-8 md:max-w-lg lg:mx-0 mx-auto">
                                    Bosen dengan puding yang rasanya gitu-gitu aja? yuk cobain puding Nyamding, dijamin
                                    anda akan menemukan pengalaman makan puding yang berbeda
                                </p>
                                <div class="flex flex-wrap items-center justify-center lg:justify-normal gap-5 mt-10">
                                    <a href="#"
                                        class="phone-number text-we py-4 text-md font-semibold px-10 font-medium bg-c1-600 rounded-full hover:bg-c1-700 transition-all">
                                        Pesan Sekarang
                                    </a>
                                    <a href="/katalog/" class="text-c1-400 flex items-center">
                                        <span
                                            class="h-14 w-14 rounded-full border-2 border-e-transparent border-c2-400 flex items-center justify-center me-2">
                                            <svg class="h-6 w-6 fill-c2-500 text-c2-500" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path
                                                    d="M257.5 27.6c-.8-5.4-4.9-9.8-10.3-10.6c-22.1-3.1-44.6 .9-64.4 11.4l-74 39.5C89.1 78.4 73.2 94.9 63.4 115L26.7 190.6c-9.8 20.1-13 42.9-9.1 64.9l14.5 82.8c3.9 22.1 14.6 42.3 30.7 57.9l60.3 58.4c16.1 15.6 36.6 25.6 58.7 28.7l83 11.7c22.1 3.1 44.6-.9 64.4-11.4l74-39.5c19.7-10.5 35.6-27 45.4-47.2l36.7-75.5c9.8-20.1 13-42.9 9.1-64.9c-.9-5.3-5.3-9.3-10.6-10.1c-51.5-8.2-92.8-47.1-104.5-97.4c-1.8-7.6-8-13.4-15.7-14.6c-54.6-8.7-97.7-52-106.2-106.8zM208 144a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM144 336a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm224-64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                            </svg>
                                        </span>
                                        <span class="font-semibold text-c1-600">Katalog Kami</span>
                                    </a>
                                </div>
                                <div class="mt-14">
                                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                                        <div class="display-image-galery flex items-center -space-x-1">
                                            <!-- image puding -->
                                        </div>
                                        <div>
                                            <h1 class="text-base font-medium text-c0-800">Berbagai rasa puding</h1>
                                            <p class="text-base text-c0-900">
                                                <svg class="lucide lucide-star h-4 w-4 inline text-c2-400 fill-c2-400"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    data-lucide="star">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                                <span class="text-c0-500 text-sm ">+<span class="total-varian">0</span>
                                                    Varian </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end grid-col -->

                    <div class="relative flex items-center justify-center py-20">
                        <span class="absolute top-0 start-0 text-3xl -rotate-[40deg]">🔥</span>
                        <span
                            class="absolute top-0 end-[10%] -rotate-12 h-14 w-14 inline-flex items-center justify-center bg-c2-400 text-we rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" data-lucide="clock-3" class="lucide lucide-clock-3 h-6 w-6">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16.5 12"></polyline>
                            </svg>
                        </span>
                        <span
                            class="absolute top-1/4 end-0 -rotate-12 h-4 w-4 inline-flex items-center justify-center bg-c1-400 text-we rounded"></span>
                        <div class=" absolute bottom-1/4 -end-0 2xl:-end-24 hidden md:block lg:hidden xl:block">
                            <img
                                src="">
                            <div class="top-pudding flex items-center gap-2 p-2 pe-6 bg-c0-50 rounded-full shadow-lg">
                                <img src=""
                                    class="image h-16 w-16 rounded-full">
                                <div class="">
                                    <h6 class="title text-sm font-medium text-c0-900"></h6>
                                    <p class="description text-[10px] font-medium text-c0-900 max-w-40 truncate"></p>
                                    <span class="price text-xs font-semibold text-c1-700 leading-none">Rp.12000</span>
                                </div>
                            </div>
                        </div>
                        <span
                            class="absolute bottom-0 end-0 -rotate-12 h-4 w-4 inline-flex items-center justify-center bg-c1-400 text-we rounded-full"></span>
                        <span class="absolute -bottom-16 end-1/3 text-3xl">🔥</span>
                        <div class="absolute bottom-0 start-0">
                            <div class="top-pudding flex items-center gap-2 p-2 pe-6 bg-c0-50 rounded-full shadow-lg">
                                <img src=""
                                    class="image h-16 w-16 rounded-full">
                                <div class="">
                                    <h6 class="title text-sm font-medium text-c0-900"></h6>
                                    <p class="description text-[10px] font-medium text-c0-900 max-w-40 truncate"></p>
                                    <span class="price text-xs font-semibold text-c1-700 leading-none"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end icons && img -->

                        <img src="https://nyamding.vercel.app/asset/img/nyamdingbg.png" class="mx-auto p-2">
                    </div><!-- end grid-col -->
                </div><!-- end grid -->
            </div><!-- end container -->
        </section>

        <!-- About Us Section -->
        <section class="lg:py-16 py-6 ">
            <div class=" max-w-7xl mx-auto px-4">
                <div class="grid lg:grid-cols-2 items-start gap-10">
                    <div class="flex items-center justify-center h-full w-full bg-c0-500/5 rounded-lg">
                        <img src="https://nyamding.vercel.app/asset/img/aboutnyamding.png" class="h-full w-full">
                    </div>
                    <div  id="tentang" class="">
                        <span class="inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-500/20 mb-6">Tentang
                            Kami</span>
                        <h2 class="text-3xl font-semibold text-c0-900 max-w-xl mb-6">Puding lezat, bahan segar, rasa
                            yang bikin nagih.</h2>
                        <p class="text-c0-500 font-medium max-w-2xl mb-10"> Nyamding menghadirkan beragam
                            varian puding yang manis, lembut, dan bikin ketagihan di setiap sendoknya. Anda dapat menikmatinya kapanpun dan dimanapun, luar pulau? kami antar!!</p>

                        <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-4">
                            <div
                                class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
                                <div class="p-6 space-y-2">
                                    <div class="">
                                        <img src="asset/img/anekavarian-nyamding.png" class="w-12 h-12">
                                    </div>
                                    <h3 class="text-lg font-medium text-c0-900">Aneka Varian</h3>
                                    <p class="text-sm text-c0-500">Manisnya Beragam, Rasanya Beda-Beda dan Selalu Nyam!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
                                <div class="p-6 space-y-2">
                                    <div class="">
                                        <img src="asset/img/bahan-pilihan-nyamding.png" class="w-12 h-12">
                                    </div>
                                    <h3 class="text-lg font-medium text-c0-900">Bahan Pilihan</h3>
                                    <p class="text-sm text-c0-500">Dibuat dengan paham pilihan yang sehat dan berkualitas.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
                                <div class="p-6 space-y-2">
                                    <div class="">
                                        <img src="asset/img/nyamding-siap-kirim.png" class="w-12 h-12">
                                    </div>
                                    <h3 class="text-lg font-medium text-c0-900">Siap Antar</h3>
                                    <p class="text-sm text-c0-500">Nyamding juga menyediakan layanan siap antar.
                                    </p>
                                </div>
                            </div>
                        </div><!-- end grid -->

                        <div class="flex flex-wrap items-center md:justify-start justify-center gap-4 mt-10">
                            <a href=""
                                class="phone-number py-3 px-10 font-semibold text-we bg-c1-600 rounded-full transition-all">Pesan
                                Sekarang</a>
                            <div class="flex items-center gap-2">
                                <img src="https://nyamding.vercel.app/asset/img/iqbal.png"
                                    class="h-12 w-12 rounded-full">
                                <div class="">
                                    <h6 class="text-base font-medium text-c0-900">Okthapian. I. M.</h6>
                                    <p class="text-sm font-medium text-c0-500">Founder CEO</p>
                                </div>
                            </div>
                        </div><!-- end flex -->
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-c0-50 px-4 lg:py-16 py-6 ">
            <div class="space-y-10  max-w-7xl mx-auto ">

                <div class="flex flex-col items-center space-y-4">
                    <span class="text-center  inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-500/20">
                        Katalog kami
                    </span>
                    <h2 class="text-center text-3xl font-semibold text-c0-900">Puding Aneka Varian</h2>
                    <p class="text-center  text-c0-500 font-medium max-w-2xl"> Nyamding menghadirkan beragam
                        varian puding yang manis, lembut, dan bikin ketagihan di setiap sendoknya.</p>
                </div>
                <div class="product-list grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- produk item -->
                </div>

                <div class="flex justify-center">

                    <a href="/katalog" class="inline-flex items-center justify-center gap-2 w-fit py-2.5 px-4 rounded-full bg-c1-600 text-we hover:bg-c1-500 transition-all" type="button">
                        Lihat Semua <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="move-right" class="lucide lucide-move-right h-5 w-5"><path d="M18 8L22 12L18 16"></path><path d="M2 12H22"></path></svg></a>
                </div>
            </div>
        </section>

        <section class=" lg:py-28 py-10 relative bg-no-repeat bg-cover bg-[url(/asset/img/promonyamding.jpg)]">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="max-w-7xl mx-auto p-4">
              <div class="relative lg:w-1/2 w-full">
                <h4 class="font-handrawn text-2xl text-c1-500 mb-6">Puding Spesial</h4>
                <h2 class="text-4xl font-semibold text-we mb-8">Kami Sajikan Puding Terbaik di Kotamu</h2>
                <p class="text-base text-we/75 max-w-2xl mb-10">Rasakan kelezatan puding homemade kami yang lembut, segar, dan dibuat dari bahan pilihan. Cocok untuk camilan keluarga, oleh-oleh, atau hidangan spesial harianmu.</p>
          
                <div class="inline-flex flex-wrap items-center justify-center gap-4">
                  <a href="https://wa.me/6285943675037?text=Halo,%20saya%20tertarik%20dengan%20promo%20puding%20spesial" target="_blank" class="py-4 px-10 font-medium text-we bg-c1-500 rounded-full hover:bg-c1-500 transition-all">Pesan Sekarang</a>
                  
                </div>
        
              </div>
            </div>
          </section>
          <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        <style>
            .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
            .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
              width: 16px !important;
              height: 4px !important;
              border-radius: 5px !important;
              margin: 0 6px !important;
            }
          
            .swiper-pagination {
              bottom: 2px !important;
            }
          
            .swiper-wrapper {
              height: max-content !important;
              width: max-content !important;
              padding-bottom: 64px;
            }
          
            .swiper-pagination-bullet-active {
              background: #f59e0b !important; /* c1-500 / amber-500 */
            }
          </style>
          
    
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="flex flex-col items-center space-y-4">
                <span class="text-center  inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-500/20">
                    Testimonial
                </span>
                <h2 class="text-center text-3xl font-semibold text-c0-900">Kata Pelanggan Kami</h2>
                <p class="text-center  text-c0-500 font-medium max-w-2xl">Tiap rasa yang Nyamding sajikan memiliki cerita masing-masing, beda orang beda rasa, apa kata mereka?</p>
            </div>
      
          <div class="swiper mySwiper">
            <div class="testimonial-data swiper-wrapper w-max">
                <!-- akan diisi via jQuery -->
              </div>
      
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <section id="kontak" class="bg-we">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-10 py-16">
            <div class="grid lg:grid-cols-5 gap-10">
                <div class="lg:col-span-2">
                    <h1 class="text-2xl font-semibold text-c0-800 mb-2">Hubungi Nyamding</h1>
                    <p class="text-sm text-c0-600 max-w-xl mb-8">
                        Kami siap melayani pertanyaan, pesanan, atau kerjasama Anda. Jangan ragu untuk menghubungi kami — tim Nyamding akan dengan senang hati membantu Anda.
                    </p>

                    <div class="flex items-center justify-center">
                        <img src="asset/img/nyamdingkontak.png" class="max-w-full h-full">
                    </div>
                </div><!-- end grid-cols -->

                <div class="lg:col-span-3">
                    <form>
                        <div class="grid lg:grid-cols-2 gap-6">
                            <div class="lg:col-span-2">
                                <label class="block text-c0-800 text-c0-950 mb-2" for="inp_name">Nama</label>
                                <input id="inp_name" name="inp_name" class="block w-full rounded-full py-2.5 px-4 bg-transparent dark:bg-c0-50 border border-c0-200 focus:ring-transparent focus:border-c0-200" type="text" placeholder="tulis nama anda">
                            </div>
                            <div class="lg:col-span-2">
                                <label class="block text-c0-800 text-c0-950 mb-2" for="inp_address">Alamat</label>
                                <input id="inp_address" class="block w-full rounded-full py-2.5 px-4 bg-transparent dark:bg-c0-50 border border-c0-200 focus:ring-transparent focus:border-c0-200" type="text" placeholder="alamat/domisi">
                            </div>
                            <div class="lg:col-span-2">
                                <label class="block text-c0-800 text-c0-950 mb-2" for="inp_message">Message</label>
                                <textarea id="inp_message" name="inp_message" class="block w-full rounded-lg py-2.5 px-4 bg-transparent dark:bg-c0-50 border border-c0-200 focus:ring-transparent focus:border-c0-200" rows="4" type="text" placeholder="Enter your message"></textarea>
                            </div>
                            <div>
                                <div class="submit-message cursor-pointer inline-flex items-center justify-center px-10 py-3 rounded-full text-base font-medium bg-c1-600 text-we capitalize transition-all hover:bg-primary-500">Kirim Pesan</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end grid -->

            
        </div><!-- container -->
    </section>
    

    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://nyamding.vercel.app/asset/js/config.js"></script>
    <script src="https://nyamding.vercel.app/asset/js/function.js"></script>
    <script src="https://nyamding.vercel.app/asset/js/query-product.js"></script>
    <script src="https://nyamding.vercel.app/asset/js/script.js"></script>
</body>

</html>