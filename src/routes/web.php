<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::post('contacts', 'ContactsController@store')->name('contacts.store');
