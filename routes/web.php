<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/all', [PostController::class, 'getAll']);

Route::get('/post/{id}', [PostController::class, 'getOne'])->where('id', '[0-9]+');

Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])
     ->where('order', 'id|title|date|length')
     ->where('dir', 'asc|desc');

Route::get('/post/new', [PostController::class, 'newPostForm']);
Route::post('/post/new', [PostController::class, 'newPost']);
