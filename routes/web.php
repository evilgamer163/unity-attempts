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
	return view('contact-data');
});

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
Route::get('/contac/tall', 'ContactController@getData')->name('contact-all');
