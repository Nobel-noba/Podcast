<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ChannelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return $request->user();
});

Route::prefix('about')->group(function(){
    Route::get('/',[AboutController::class,'index'])->name('about_index');
    Route::get('/{id}',[AboutController::class,'show'])->name('about_show');
    Route::post('/',[AboutController::class,'store'])->name('about_store');
    Route::put('/{id}',[AboutController::class,'update'])->name('about_update');
    Route::delete('/{id}',[AboutController::class,'delete'])->name('about_delete');
});

Route::prefix('blog')->group(function(){
    Route::get('/',[BlogController::class,'index'])->name('blog_index');
    Route::get('/{id}',[BlogController::class,'show'])->name('blog_show');
    Route::post('/',[BlogController::class,'store'])->name('blog_store');
    Route::put('/{id}',[BlogController::class,'update'])->name('blog_update');
    Route::delete('/{id}',[BlogController::class,'delete'])->name('blog_delete');
});

Route::prefix('channel')->group(function(){
    Route::get('/',[ChannelController::class,'index'])->name('channel_index');
    Route::get('/{id}',[ChannelController::class,'show'])->name('channel_show');
    Route::post('/',[ChannelController::class,'store'])->name('channel_store');
    Route::put('/{id}',[ChannelController::class,'update'])->name('channel_update');
    Route::delete('/{id}',[ChannelController::class,'delete'])->name('channel_delete');
});

Route::prefix('comment')->group(function(){
    Route::get('/',[CommentController::class,'index'])->name('comment_index');
    Route::get('/{id}',[CommentController::class,'show'])->name('comment_show');
    Route::post('/',[CommentController::class,'store'])->name('comment_store');
    Route::put('/{id}',[CommentController::class,'update'])->name('comment_update');
    Route::delete('/{id}',[CommentController::class,'delete'])->name('comment_delete');
});
