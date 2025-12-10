<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about-ussss', [BasicController::class, 'about'])->name('about');

Route::get('/contacts', [BasicController::class, 'contact'])->name('contacts');

Route::post('/contacts', [BasicController::class, 'submit'])->name('contacts.post');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.one');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.one.edit');
Route::post('/posts/{id}/edit', [PostController::class, 'update'])->name('posts.edit');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.one.delete');
