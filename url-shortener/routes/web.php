<?php


use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, 'index']);
Route::post('/shorten', [UrlController::class, 'shorten']);
Route::get('/{shortened_url}', [UrlController::class, 'redirect']);


