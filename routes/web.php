<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
})->name('home');

Route::name('user.')-> group(function () {

    Route::view('/admin', 'private')->middleware('auth')->name('private');

    Route::get('/login', function () {

        if(Auth::check()){

            return (redirect(route('home')));
        }

        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/registration', function () {
        if(Auth::check()){

            return (redirect(route('home')));
        }

        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegistrationController::class, 'save']);

    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

});
