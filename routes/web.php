<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;


Route::resource('photos', PhotoController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/world', function() {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama : Rangga Dwi Saputra <br> NIM  : 2341720248';
});

Route::get('/user/{name}',  function ($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/article/{id}', function ($id) {
    return 'Halaman Article dengan ID '. $id;
});

Route::get('/user/{name?}', function ($name='Udin'){
    return 'Nama saya '.$name;
});

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Rangga', 'occupation' => 'Astronout']);
    });

// Route::get('/hello', [WelcomeController::class,'hello']);
