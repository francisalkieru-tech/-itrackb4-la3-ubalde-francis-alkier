<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/whoami', function () {
    return 'Francis Alkier M. Ubalde | 2023-70377 | Block 4c | ITRACKB4 Laravel 12';
});

Route::get('/products', [ProductController::class, 'index']);


