<?php

use Illuminate\Support\Facades\Route;

Route::get('/task1', function () {
    return 'Hello, World!';
});

Route::get('/task2/{name}', function ($name) {
    return 'Hello,' . $name;
});

Route::get('/task3/{age}', function ($age = null) {
    if ($age) {
        return "You are $age years old.";
    } else {
        return "Age not provided.";
    }
});

Route::get('/task7/{id}', function ($id) {
    return "User ID: $id";
})->where('id', '[0-9]+');

Route::get('/task11/{page?}', function ($page = 1) {
    return "Viewing page $page";
});

Route::get('/task13', function () {
    return view('welcome');
});