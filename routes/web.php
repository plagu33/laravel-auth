<?php

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/','AppController@index')->name('inicio');