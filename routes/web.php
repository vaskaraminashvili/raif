<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome')->name('welcome');
Route::livewire('/contact-us', 'pages::contact-us')->name('contact-us');
Route::livewire('/about-the-fund', 'pages::about-the-fund')->name('about-the-fund');
Route::livewire('/sub-funds', 'pages::sub-funds')->name('sub-funds');
Route::livewire('/documents', 'pages::documents')->name('documents');
Route::livewire('/governance-service-providers', 'pages::governance-service-providers')->name('governance-service-providers');
Route::livewire('/about-the-group', 'pages::about-the-group')->name('about-the-group');
Route::livewire('/how-to-invest', 'pages::how-to-invest')->name('how-to-invest');

