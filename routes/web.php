<?php

use App\Http\Controllers\Auth\batimentController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $bests = DB::table('batiments')
    ->join('images', 'batiments.id', '=', 'images.batiment_id') // joining the contacts table , where user_id and contact_user_id are same
    ->select('batiments.*', 'images.path')
    ->where('batiments.best',1)
    ->groupBy('batiments.id')
    ->get();

    return view('user.index', compact('bests'));

});

Route::get('/batiment/{batiment}', [PagesController::class,'single'])->name('batiment-single');

Route::get('/services', [PagesController::class,'services'])->name('services');

Route::get('/about', [PagesController::class,'about'])->name('about');

Route::get('/properties', [PagesController::class,'properties'])->name('batiments');

Route::get('/contact-us', [PagesController::class,'contact'])->name('contact');







Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group( function(){
        Route::get('/dashboard', [PagesController::class,'admin'])->name('admin');



        Route::get('/log-out', [loginController::class,'logout'])->name('logout');

    });


    Route::prefix('admin/batiment')->group( function(){


        Route::get('/list', [batimentController::class,'list'])->name('batiment.list');


        Route::get('/nouvelle-batiment', [batimentController::class,'create'])->name('batiment.create');

        Route::post('/storing', [batimentController::class,'store'])->name('batiment.store');

        Route::get('/edit-batiment/{batiment}', [batimentController::class,'edit'])->name('batiment.edit');

        Route::post('/updating/{batiment}', [batimentController::class,'update'])->name('batiment.update');


        Route::get('/destroy-batiment/{batiment}', [batimentController::class,'destroy'])->name('batiment.destroy');
        Route::get('/save-batiment/{batiment}', [batimentController::class,'add_to_best'])->name('batiment.save');




           });







});


Route::middleware('guest')->group(function () {
Route::get('/login',function(){
    return view('login') ;
})->name('login');

});
Route::post('/check', [loginController::class,'login'])->name('check');





