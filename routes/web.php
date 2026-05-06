<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome')->name('home');
Route::livewire('/contact-us', 'pages::contact-us')->name('contact-us');
Route::livewire('/the-fund', 'pages::the-fund')->name('the-fund');
Route::livewire('/investment-vehicles', 'pages::investment-vehicles')->name('investment-vehicles');
Route::livewire('/investor-materials', 'pages::investor-materials')->name('investor-materials');
Route::livewire('/governance-service-providers', 'pages::governance-service-providers')->name('governance-service-providers');
Route::livewire('/platform-group-companies', 'pages::platform-group-companies')->name('platform-group-companies');
Route::livewire('/sfdr-sustainability', 'pages::sfdr-sustainability')->name('sfdr-sustainability');

