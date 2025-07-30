<?php
Render::setcontent('content', function () { ?>
    <main>
      <?php
$admin = DB::table('admin')->get();
pre($admin);
?>
        <!-- Hero Section -->
        <section class="py-6 lg:py-16  relative">
            <div class="absolute inset-0 blur-[60px] bg-gradient-to-l from-orange-600/20 via-orange-600/5 to-orange-600/0">
            </div>
            <div class="max-w-7xl mx-auto relative">
                <div class="grid lg:grid-cols-2 items-center">
                    <div class="py-20 px-10">
                        <div class="flex items-center justify-center lg:justify-start order-last lg:order-first z-10">
                            <div class="text-center lg:text-start">
                                <span class="inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-600/30 mb-8 lg:mb-2">#Special
                                    Food 🍮</span>
                                <h1 class="lg:text-6xl/normal md:text-5xl/snug text-3xl font-bold text-c0-950 capitalize mb-5">
                                    Ngemil
                                    <span class="inline-flex relative">
                                        <span>Puding</span>
                                        <img src="data:image/png;base64,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" class="absolute -z-10 h-full w-full lg:flex hidden">
                                    </span>
                                    <span class="text-c1-500">Asik</span> dan Bikin Nagih
                                </h1>
                                <p class="text-lg text-c0-700 font-medium mb-8 md:max-w-lg lg:mx-0 mx-auto">
                                    Bosen dengan puding yang rasanya gitu-gitu aja? yuk cobain puding Nyamding, dijamin
                                    anda akan menemukan pengalaman makan puding yang berbeda
                                </p>
                                <div class="flex flex-wrap items-center justify-center lg:justify-normal gap-5 mt-10">
                                    <a href="https://wa.me/6285943675037" class="phone-number text-we py-4 text-md font-semibold px-10 font-medium bg-c1-600 rounded-full hover:bg-c1-700 transition-all" target="_blank">
                                        Pesan Sekarang
                                    </a>
                                    <a href="/katalog/" class="text-c1-400 flex items-center">
                                        <span class="h-14 w-14 rounded-full border-2 border-e-transparent border-c2-400 flex items-center justify-center me-2">
                                            <svg class="h-6 w-6 fill-c2-500 text-c2-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path d="M257.5 27.6c-.8-5.4-4.9-9.8-10.3-10.6c-22.1-3.1-44.6 .9-64.4 11.4l-74 39.5C89.1 78.4 73.2 94.9 63.4 115L26.7 190.6c-9.8 20.1-13 42.9-9.1 64.9l14.5 82.8c3.9 22.1 14.6 42.3 30.7 57.9l60.3 58.4c16.1 15.6 36.6 25.6 58.7 28.7l83 11.7c22.1 3.1 44.6-.9 64.4-11.4l74-39.5c19.7-10.5 35.6-27 45.4-47.2l36.7-75.5c9.8-20.1 13-42.9 9.1-64.9c-.9-5.3-5.3-9.3-10.6-10.1c-51.5-8.2-92.8-47.1-104.5-97.4c-1.8-7.6-8-13.4-15.7-14.6c-54.6-8.7-97.7-52-106.2-106.8zM208 144a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM144 336a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm224-64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                            </svg>
                                        </span>
                                        <span class="font-semibold text-c1-600">Katalog Kami</span>
                                    </a>
                                </div>
                                <div class="mt-14">
                                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                                        <div class="display-image-galery flex items-center -space-x-1">
            <div class="h-12 w-12">
              <img class="image-item h-full w-full rounded-full object-cover object-center ring ring-c0-50" src="https://nyamding.vercel.app/asset/img/product/pudingcoklat.png" alt="Puding Coklat">
            </div>
          
            <div class="h-12 w-12">
              <img class="image-item h-full w-full rounded-full object-cover object-center ring ring-c0-50" src="https://nyamding.vercel.app/asset/img/product/pudingstobery.png" alt="Puding Stroberry">
            </div>
          
            <div class="h-12 w-12">
              <img class="image-item h-full w-full rounded-full object-cover object-center ring ring-c0-50" src="https://nyamding.vercel.app/asset/img/product/pudingmangga.png" alt="Puding Mangga">
            </div>
          </div>
                                        <div>
                                            <h1 class="text-base font-medium text-c0-800">Berbagai rasa puding</h1>
                                            <p class="text-base text-c0-900">
                                                <svg class="lucide lucide-star h-4 w-4 inline text-c2-400 fill-c2-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="star">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg>
                                                <span class="text-c0-500 text-sm ">+<span class="total-varian">4</span>
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
                        <span class="absolute top-0 end-[10%] -rotate-12 h-14 w-14 inline-flex items-center justify-center bg-c2-400 text-we rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="clock-3" class="lucide lucide-clock-3 h-6 w-6">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16.5 12"></polyline>
                            </svg>
                        </span>
                        <span class="absolute top-1/4 end-0 -rotate-12 h-4 w-4 inline-flex items-center justify-center bg-c1-400 text-we rounded"></span>
                        <div class=" absolute bottom-1/4 -end-0 2xl:-end-24 hidden md:block lg:hidden xl:block">
                            <img src="">
                            <div class="top-pudding flex items-center gap-2 p-2 pe-6 bg-c0-50 rounded-full shadow-lg">
                                <img src="https://nyamding.vercel.app/asset/img/product/pudingkopi.png" class="image h-16 w-16 rounded-full" alt="Puding Kopi">
                                <div class="">
                                    <h6 class="title text-sm font-medium text-c0-900">Puding Kopi</h6>
                                    <p class="description text-[10px] font-medium text-c0-900 max-w-40 truncate">Sensasi kopi dalam lembutnya puding</p>
                                    <span class="price text-xs font-semibold text-c1-700 leading-none">Rp.3.000</span>
                                </div>
                            </div>
                        </div>
                        <span class="absolute bottom-0 end-0 -rotate-12 h-4 w-4 inline-flex items-center justify-center bg-c1-400 text-we rounded-full"></span>
                        <span class="absolute -bottom-16 end-1/3 text-3xl">🔥</span>
                        <div class="absolute bottom-0 start-0">
                            <div class="top-pudding flex items-center gap-2 p-2 pe-6 bg-c0-50 rounded-full shadow-lg">
                                <img src="https://nyamding.vercel.app/asset/img/product/pudingstobery.png" class="image h-16 w-16 rounded-full" alt="Puding Stroberry">
                                <div class="">
                                    <h6 class="title text-sm font-medium text-c0-900">Puding Stroberry</h6>
                                    <p class="description text-[10px] font-medium text-c0-900 max-w-40 truncate">Cara beda makan stroberi yang segar</p>
                                    <span class="price text-xs font-semibold text-c1-700 leading-none">Rp.3.000</span>
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
                    <div id="tentang" class="">
                        <span class="inline-flex py-2 px-4 text-sm text-c1-800 rounded-full bg-c1-500/20 mb-6">Tentang
                            Kami</span>
                        <h2 class="text-3xl font-semibold text-c0-900 max-w-xl mb-6">Puding lezat, bahan segar, rasa
                            yang bikin nagih.</h2>
                        <p class="text-c0-500 font-medium max-w-2xl mb-10"> Nyamding menghadirkan beragam
                            varian puding yang manis, lembut, dan bikin ketagihan di setiap sendoknya. Anda dapat menikmatinya kapanpun dan dimanapun, luar pulau? kami antar!!</p>

                        <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-4">
                            <div class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
                                <div class="p-6 space-y-2">
                                    <div class="">
                                        <img src="asset/img/anekavarian-nyamding.png" class="w-12 h-12">
                                    </div>
                                    <h3 class="text-lg font-medium text-c0-900">Aneka Varian</h3>
                                    <p class="text-sm text-c0-500">Manisnya Beragam, Rasanya Beda-Beda dan Selalu Nyam!
                                    </p>
                                </div>
                            </div>
                            <div class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
                                <div class="p-6 space-y-2">
                                    <div class="">
                                        <img src="asset/img/bahan-pilihan-nyamding.png" class="w-12 h-12">
                                    </div>
                                    <h3 class="text-lg font-medium text-c0-900">Bahan Pilihan</h3>
                                    <p class="text-sm text-c0-500">Dibuat dengan paham pilihan yang sehat dan berkualitas.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-transparent rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200">
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
                            <a href="https://wa.me/6285943675037" class="phone-number py-3 px-10 font-semibold text-we bg-c1-600 rounded-full transition-all" target="_blank">Pesan
                                Sekarang</a>
                            <div class="flex items-center gap-2">
                                <img src="https://nyamding.vercel.app/asset/img/iqbal.png" class="h-12 w-12 rounded-full">
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
            <div class="produk-item">
              <div class="bg-we flex flex-col sm:flex-row sm:items-center justify-center gap-4 relative rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200 p-4">
                <div class="shrink-0 w-full sm:w-1/3">
                  <img src="https://nyamding.vercel.app/asset/img/product/pudingmangga.png" alt="Puding Mangga" class="w-full h-48 object-cover rounded-md">
                </div>
                <div class="grow space-y-2">
                  <h3 class="text-xl font-semibold text-c0-800">Puding Mangga</h3>
                  <p class="text-sm text-c0-500 italic">Bukan cuma dirujak, di puding bisa!</p>
                  <p class="text-sm text-c0-600 line-clamp-3">Puding rasa mangga dengan aroma tropis yang menggoda. Nikmat dan unik, cara baru menikmati manisnya buah mangga.</p>
                  <div class="flex items-center justify-between">
                    <div class="text-c1-500 font-bold text-lg">Rp3.000</div>
                    <div class="text-yellow-500 text-sm">⭐ 4.5</div>
                  </div>
                  <a href="https://wa.me/6285943675037?text=Halo%2C%20saya%20mau%20pesan%20Puding%20Mangga" target="_blank" class="fpnt-semibold inline-block mt-2 rounded-full bg-c1-500 text-we px-4 py-2 text-sm hover:bg-c1-600">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
          
            <div class="produk-item">
              <div class="bg-we flex flex-col sm:flex-row sm:items-center justify-center gap-4 relative rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200 p-4">
                <div class="shrink-0 w-full sm:w-1/3">
                  <img src="https://nyamding.vercel.app/asset/img/product/pudingcoklat.png" alt="Puding Coklat" class="w-full h-48 object-cover rounded-md">
                </div>
                <div class="grow space-y-2">
                  <h3 class="text-xl font-semibold text-c0-800">Puding Coklat</h3>
                  <p class="text-sm text-c0-500 italic">Rasa coklat yang lumer di lidah</p>
                  <p class="text-sm text-c0-600 line-clamp-3">Puding coklat lembut dengan rasa manis yang pas. Coklatnya melimpah, lumer di setiap suapan. Cocok untuk pencinta coklat sejati!</p>
                  <div class="flex items-center justify-between">
                    <div class="text-c1-500 font-bold text-lg">Rp4.000</div>
                    <div class="text-yellow-500 text-sm">⭐ 4.8</div>
                  </div>
                  <a href="https://wa.me/6285943675037?text=Halo%2C%20saya%20mau%20pesan%20Puding%20Coklat" target="_blank" class="fpnt-semibold inline-block mt-2 rounded-full bg-c1-500 text-we px-4 py-2 text-sm hover:bg-c1-600">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
          
            <div class="produk-item">
              <div class="bg-we flex flex-col sm:flex-row sm:items-center justify-center gap-4 relative rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200 p-4">
                <div class="shrink-0 w-full sm:w-1/3">
                  <img src="https://nyamding.vercel.app/asset/img/product/pudingstobery.png" alt="Puding Stroberry" class="w-full h-48 object-cover rounded-md">
                </div>
                <div class="grow space-y-2">
                  <h3 class="text-xl font-semibold text-c0-800">Puding Stroberry</h3>
                  <p class="text-sm text-c0-500 italic">Cara beda makan stroberi yang segar</p>
                  <p class="text-sm text-c0-600 line-clamp-3">Perpaduan stroberi segar dengan tekstur puding yang lembut. Rasanya menyegarkan dan cocok jadi camilan dingin favoritmu!</p>
                  <div class="flex items-center justify-between">
                    <div class="text-c1-500 font-bold text-lg">Rp3.000</div>
                    <div class="text-yellow-500 text-sm">⭐ 4.4</div>
                  </div>
                  <a href="https://wa.me/6285943675037?text=Halo%2C%20saya%20mau%20pesan%20Puding%20Stroberry" target="_blank" class="fpnt-semibold inline-block mt-2 rounded-full bg-c1-500 text-we px-4 py-2 text-sm hover:bg-c1-600">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
          
            <div class="produk-item">
              <div class="bg-we flex flex-col sm:flex-row sm:items-center justify-center gap-4 relative rounded-md shadow-lg border border-c0-100 hover:border-c1-400 transition-all duration-200 p-4">
                <div class="shrink-0 w-full sm:w-1/3">
                  <img src="https://nyamding.vercel.app/asset/img/product/pudingkopi.png" alt="Puding Kopi" class="w-full h-48 object-cover rounded-md">
                </div>
                <div class="grow space-y-2">
                  <h3 class="text-xl font-semibold text-c0-800">Puding Kopi</h3>
                  <p class="text-sm text-c0-500 italic">Sensasi kopi dalam lembutnya puding</p>
                  <p class="text-sm text-c0-600 line-clamp-3">Puding dengan aroma dan rasa kopi yang khas, bikin melek dan nagih. Cocok untuk penikmat kopi yang ingin camilan beda!</p>
                  <div class="flex items-center justify-between">
                    <div class="text-c1-500 font-bold text-lg">Rp3.000</div>
                    <div class="text-yellow-500 text-sm">⭐ 4.6</div>
                  </div>
                  <a href="https://wa.me/6285943675037?text=Halo%2C%20saya%20mau%20pesan%20Puding%20Kopi" target="_blank" class="fpnt-semibold inline-block mt-2 rounded-full bg-c1-500 text-we px-4 py-2 text-sm hover:bg-c1-600">
                    Order Now
                  </a>
                </div>
              </div>
            </div>
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
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

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
      
          <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="testimonial-data swiper-wrapper w-max" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);" id="swiper-wrapper-ec8736be937d360b" aria-live="off"><div class="testimonial-item swiper-slide swiper-slide-next swiper-slide-prev" style="width: 384px; margin-right: 32px;" role="group" aria-label="2 / 2" data-swiper-slide-index="1">
          <div class="group bg-we border border-c0-200 rounded-xl p-6 transition-all duration-500 w-full mx-auto hover:border-c1-600 slide_active:border-c1-600 hover:shadow-sm">
            <div class="flex items-center mb-7 gap-2 text-c2-500">
              <svg class="w-5 h-5" viewBox="0 0 18 17" fill="currentColor">
                <path d="M8.1 1.3c.4-.7 1.5-.7 1.8 0l1.8 3.7c.1.3.4.5.7.5l4 .6c.8.1 1.1 1.1.5 1.7l-2.9 2.9c-.2.2-.3.5-.2.8l.7 4c.1.8-.7 1.4-1.4 1l-3.6-1.9a.9.9 0 0 0-.8 0l-3.6 1.9c-.7.4-1.5-.2-1.4-1l.7-4c0-.3 0-.6-.2-.8L.9 7.8c-.6-.6-.3-1.6.5-1.7l4-.6c.3 0 .6-.2.7-.5L8.1 1.3Z"></path>
              </svg>
              <span class="text-base font-semibold text-c1-600">4.9</span>
            </div>
            <p class="text-base text-c0-600 leading-6 pb-8 group-hover:text-c0-800 slide_active:text-c0-800">
              Varian rasanya unik dan tidak membosankan. Cocok untuk oleh-oleh juga.
            </p>
            <div class="flex items-center gap-5 border-t border-c0-200 pt-5">
              <img class="rounded-full h-10 w-10 object-cover" src="/asset/img/user.png" alt="avatar">
              <div class="block">
                <h5 class="text-c0-800 font-medium mb-1">Rina M.</h5>
                <span class="text-sm text-c0-500">Karyawan Swasta</span>
              </div>
            </div>
          </div>
        </div><div class="testimonial-item swiper-slide swiper-slide-active" style="width: 384px; margin-right: 32px;" role="group" aria-label="1 / 2" data-swiper-slide-index="0">
          <div class="group bg-we border border-c0-200 rounded-xl p-6 transition-all duration-500 w-full mx-auto hover:border-c1-600 slide_active:border-c1-600 hover:shadow-sm">
            <div class="flex items-center mb-7 gap-2 text-c2-500">
              <svg class="w-5 h-5" viewBox="0 0 18 17" fill="currentColor">
                <path d="M8.1 1.3c.4-.7 1.5-.7 1.8 0l1.8 3.7c.1.3.4.5.7.5l4 .6c.8.1 1.1 1.1.5 1.7l-2.9 2.9c-.2.2-.3.5-.2.8l.7 4c.1.8-.7 1.4-1.4 1l-3.6-1.9a.9.9 0 0 0-.8 0l-3.6 1.9c-.7.4-1.5-.2-1.4-1l.7-4c0-.3 0-.6-.2-.8L.9 7.8c-.6-.6-.3-1.6.5-1.7l4-.6c.3 0 .6-.2.7-.5L8.1 1.3Z"></path>
              </svg>
              <span class="text-base font-semibold text-c1-600">4.9</span>
            </div>
            <p class="text-base text-c0-600 leading-6 pb-8 group-hover:text-c0-800 slide_active:text-c0-800">
              Pudingnya enak banget! Teksturnya lembut, manisnya pas. Anak-anak di rumah jadi ketagihan.
            </p>
            <div class="flex items-center gap-5 border-t border-c0-200 pt-5">
              <img class="rounded-full h-10 w-10 object-cover" src="/asset/img/user.png" alt="avatar">
              <div class="block">
                <h5 class="text-c0-800 font-medium mb-1">Dewi A.</h5>
                <span class="text-sm text-c0-500">Ibu Rumah Tangga</span>
              </div>
            </div>
          </div>
        </div>
        
      
        
      </div>
      
            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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

<?php
});

render::template('general'); ?>