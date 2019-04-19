<?php

use Illuminate\Http\Request;

Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/contact', 'PagesController@contact')->name('pages.about');
