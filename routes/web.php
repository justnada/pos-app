<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard/index', [
        'active' => 'dashboard',
        'title' => 'Dashboard'
    ]);
});

Route::get('/category', function () {
    return view('category/index', [
        'active' => 'category',
        'title' => 'Kategori'
    ]);
});

