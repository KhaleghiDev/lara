<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
});
Route::prefix('v1')->namespace('Api\v1')->group(function () {

    //router category controller

    Route::get('/category', [CategoryController::class,'index'])->name('categories.all');
    Route::post('/category', [CategoryController::class,'store'])->name('categories.store');
    Route::get('/category/{category}', [CategoryController::class,'show'])->name('categories.show');
    Route::put('/category/{category}', [CategoryController::class,'update'])->name('categories.update');
    Route::delete('/category/{category}', [CategoryController::class,'destroy'])->name('categories.destroy');
    //router posts controller

    Route::get('/posts', [PostController::class,'index'])->name('post.all');
    Route::post('/posts',  [PostController::class,'store'])->name('post.store');
    Route::get('/posts/{post}', [PostController::class,'show'])->name('post.show');
    Route::put('/posts/{post}', [PostController::class,'update'])->name('post.update');
    Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('post.destroy');
    //router tags controller

    Route::get('/tags', 'TagController@index')->name('tag.all');
    Route::post('/tags', 'TagController@store')->name('tag.store');
    Route::get('/tags/{tag}', 'TagController@show')->name('tag.show');
    Route::put('/tags/{tag}', 'TagController@update')->name('tag.update');
    Route::delete('/tags/{tag}', 'TagController@destroy')->name('tag.destroy');
});
