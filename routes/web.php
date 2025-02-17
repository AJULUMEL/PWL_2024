<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class,'hello']); 

Route::get('/world', function () {    return 'World'; 
}); 

Route::get('/selamat', function (){return 'Selamat Datang';});


Route::get( '/user/{name} ', action: function ($name) { return 'Nama Saya '.$name; }); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);

Route::resource('photos', PhotoController::class);

Route::get('/user/{name?}', function ($name='Ajul') {return 'Nama Saya '.$name;});




