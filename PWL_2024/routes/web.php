<?php

use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM : 2341720208 <br> Nama : Luthfi Triaswangga';
});

Route::get('/wellcome', function () {
    return 'Selaamt Datang';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/article/{id}', function
($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function() {
    //
   })->name('profile');

   use App\Http\Controllers\PhotoController;
   Route::resource('photos', PhotoController::class);