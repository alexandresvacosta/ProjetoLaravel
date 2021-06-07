<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name as NodeName;

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
    return view('site.home');
})->name('site.home');

Route::get('/catalogo', function () {
    return view('site.collections');
})->name('site.products');

Route::get('/usuario', function () {
    return view('site.user');
})->name('site.user');

Route::get('/cadastro', function () {
    return view('site.register');
})->name('site.register');

Route::view('form', 'upload.form');
Route::post('upload', 'UploadController@upload')->name('upload');
