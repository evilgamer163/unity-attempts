<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact-data', function () {
	return view('messages');
})->name('contact-data');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Route::get('/contact/all/{id}/update', 'ContactController@update')->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateSubmit')->name('contact-update-submit');

Route::get('/contact/all/{id}/del', 'ContactController@deleteMsg')->name('contact-del');

Route::get('/contac/all', 'ContactController@getData')->name('contact-all');
Route::get('/contac/all/{id}', 'ContactController@showOneMas')->name('contact-id-msg');
