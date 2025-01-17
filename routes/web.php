<?php

use App\Http\Controllers\Portfolio\DownloadCv;
use App\Http\Controllers\Portfolio\SendMessage;
use Illuminate\Support\Facades\Route;

Route::view('', 'portfolio.home')->name('home');

Route::get('test', function () {
    return view('test');
});

// portfolio
Route::post('send-message', SendMessage::class)->name('send.message');
Route::get('downloadcv', DownloadCv::class)->name('download.cv');

Route::prefix('shopsmart')->name('shopsmart.')->group(function () {
    Route::view('', 'maintainance')->name('home');
});

Route::prefix('delicacy')->name('delicacy.')->group(function () {
    Route::view('', 'maintainance')->name('home');
});

Route::prefix('taskflow')->name('taskflow.')->group(function () {
    Route::view('', 'maintainance')->name('home');
});

Route::fallback(function () {
    return view('not-found');
});
