<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\HalamanProductController;
use App\Http\Controllers\HalamanProgramController;
use App\Http\Controllers\HalamanNewsController;
use App\Http\Controllers\HalamanAboutUsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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

// Route::get('/home', function () {
//     return view('home');
// });

//praktikkum 1

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "2041720229 <br>"  ;
//     echo "Safira Istifarini <br>" ;
//     echo "TI2H";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "ini adalah halaman artikel dengan ID : 123456". $id;
// });

//Praktikkum 2
// Route::get('/',[PageController::class, 'index']);

// Route::get('/about',[PageController::class, 'about']);

// Route::get('/articles/{id}',[PageController::class, 'articles']);

//modifikasi
//Route::get('/',[homeController::class, 'index']);

//Route::get('/about',[aboutController::class, 'about']);

//Route::get('/articles/{id}',[articlesController::class, 'articles']);

//Praktikum 3

//HALAMAN UTAMA/HOME
//Route::get('/Home',[HalamanUtamaController::class, 'HalamanUtama']);

 //HALAMAN PRODUCT
 

 //HALAMAN NEWS

 //HALAMAN PROGRAM

 //HALAMAN ABOUT US
 //Route::get('/aboutUs',[HalamanAboutUsController::class, 'aboutUs']);
 

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', ArticleController::class);

//Route::get('/home', [App\Http\Controllers\PostController::class, 'index']);

//Route::resource('mahasiswa', MahasiswaController::class);