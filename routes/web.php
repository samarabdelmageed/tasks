<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About',function(){
    return view('About');
});

Route::get('/ContactUs',function(){
    return 'This is our contact information';
});

Route::prefix('Blog')->group(function(){

    Route::get('/',function(){
        return 'Welcome to our Blogs';
    });

    Route::get('/Science',function(){
        return 'Science Blog';
    });

    Route::get('/Sports',function(){
        return 'Sports Blog';
    });

    Route::get('/Math',function(){
        return 'Math Blog';
    });

    Route::get('/Medical',function(){
        return 'Medical Blog';
    });
});