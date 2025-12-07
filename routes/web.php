<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('static.home');
})->name('home');

Route::get('/about-us', function () {
    return view('static.about');
})->name('about');

Route::get('/contacts', function () {
    return view('static.contacts');
})->name('contacts');

Route::post('/contacts', function () {
//    dd(Request::all());
    return redirect('/contacts')->withInput();
})->name('contacts.post');
