<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/admin', [AdminController::class, 'index']);