<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('login');
})->name('login');



Route::middleware('auth')->group(function () {
    
    Route::get('/painel', function () {
        return view('admin.dashboard');
    })->name('painel');

    Route::get('/usuarios', function () {
        return view('admin.usuarios');
    })->name('usuarios');

    Route::get('/produtos', function () {
        return view('admin.produtos');
    })->name('produtos');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

});

