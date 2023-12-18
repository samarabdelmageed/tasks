<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;

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

Route::get('/login', [FormController::class, 'show']);
Route::post('/process-form', [FormController::class, 'processForm'])->name('process.form');
Route::get('/logged', [FormController::class, 'displayEnteredData'])->name('display.entered.data');
Route::get('createpost', [PostController::class, 'create'])->name('createPost');
Route::post('storepost', [PostController::class, 'store'])->name('storePost');
Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('updatePost/{id}',[PostController::class, 'edit'])->name('updatePost');
Route::put('update/{id}',[PostController::class, 'update'])->name('update');
Route::get('showPost/{id}',[PostController::class, 'show'])->name('show');
Route::get('deletePost/{id}',[PostController::class, 'destroy'])->name('delete');
Route::get('trashed',[PostController::class, 'trashed'])->name('trashed');
Route::get('forceDelete/{id}',[PostController::class, 'forceDelete'])->name('forceDelete');
Route::get('restorePost/{id}',[PostController::class, 'restore'])->name('restorePost');