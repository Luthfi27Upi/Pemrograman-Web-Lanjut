<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/FoodBaverage', function () {
    return 'Beverage';
});

Route::get('/category/BeautyHealth', function () {
    return 'Ini adalah halaman BeautyHealth';
});

Route::get('/category/HomeCare', function () {
    return 'Ini adalah halaman HomeCare';
});

Route::get('/category/BabyKid', function () {
    return 'Ini adalah halaman BabyKid';
});

Route::get('/user/{id}/name/{name}', function ($id,$name) {
    return 'User ke-'.$id." Namanya adalah ".$name;
});