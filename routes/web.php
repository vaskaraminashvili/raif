<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome')->name('welcome');
Route::livewire('/contact-us', 'pages::contact-us')->name('contact-us');
