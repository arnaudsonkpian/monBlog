<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)
->group(function () {
    Route::get('/','index');
    Route::get('/contact-us', 'contact');
    Route::get('/about', 'about');
    
});
Route::controller(ArticleController::class)->
group(function () {
    Route::get('/articles','index');
    Route::get('/article/create','create');
    Route::post('/articles/article','store');
    Route::get('/article/{article}','show');

});


















































































    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */
    
    
    
    //Sans les controllers on a
    // Route::get("/", function () {
    //     return view("layouts.master"); par exemple
    // });
    //Avec les routes
    // Route::get('/', [PagesController::class,'index']);
    // ;
    // Route::get('/contact-us', [PagesController::class,'contact']);
    // LE cas des controllers groupee