<?php

Route::get('', '@index');
Route::get('produk', 'Produk@index');
Route::get('produk/(:any)', 'Produk@single');