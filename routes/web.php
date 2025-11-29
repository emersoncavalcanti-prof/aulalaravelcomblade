<?php

use App\Http\Controllers\UserController;
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


    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/novo',[UserController::class,'create'])->name('usuarios.novo');
    Route::get('/usuarios/alterar/{user}',[UserController::class,'edit'])->name('usuarios.alterar');




    Route::get('/produtos', function () {
        return view('admin.produtos');
    })->name('produtos');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

});

