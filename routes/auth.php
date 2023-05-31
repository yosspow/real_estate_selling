<?php

use App\Http\Controllers\Auth\batimentController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group( function(){
        Route::get('/dashboard', [PagesController::class,'admin'])->name('admin');



        Route::get('/log-out', [loginController::class,'logout'])->name('logout');

    });


    Route::prefix('batiment')->group( function(){


        Route::get('/list', [batimentController::class,'list'])->name('batiment.list');

        Route::get('/nouvelle-batiment', [batimentController::class,'create'])->name('batiment.create');

           });







});


Route::middleware('guest')->group(function () {
Route::get('/login',function(){
    return view('login') ;
})->name('login');

});
