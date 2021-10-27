<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SavedController;
use App\Http\Controllers\SubscribeController;
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
Route::prefix('feedback')->group(function () {
    Route::get('/', [FeedbackController::class, 'index'])->name('feedback_index');
    Route::get('/{id}', [FeedbackController::class, 'show'])->name('feedback_show');
    Route::post('/', [FeedbackController::class, 'store'])->name('feedback_store');
    Route::put('/{id}', [FeedbackController::class, 'update'])->name('feedback_update');
    Route::delete('/{id}', [FeedbackController::class, 'delete'])->name('feedback_delete');

});

Route::prefix('podcast')->group(function () {
    Route::get('/', [PodcastController::class, 'index'])->name('podcast_index');
    Route::get('/{id}', [PodcastController::class, 'show'])->name('podcast_show');
    Route::post('/', [PodcastController::class, 'store'])->name('podcast_store');
    Route::put('/{id}', [PodcastController::class, 'update'])->name('podcast_update');
    Route::delete('/{id}', [PodcastController::class, 'delete'])->name('podcast_delete');

});

Route::prefix('reply')->group(function () {
    Route::get('/', [ReplyController::class, 'index'])->name('reply_index');
    Route::get('/{id}', [ReplyController::class, 'show'])->name('reply_show');
    Route::post('/', [ReplyController::class, 'store'])->name('reply_store');
    Route::put('/{id}', [ReplyController::class, 'update'])->name('reply_update');
    Route::delete('/{id}', [ReplyController::class, 'delete'])->name('reply_delete');

});

Route::prefix('saved')->group(function () {
    Route::get('/', [SavedController::class, 'index'])->name('saved_index');
    Route::get('/{id}', [SavedController::class, 'show'])->name('saved_show');
    Route::post('/', [SavedController::class, 'store'])->name('saved_store');
    Route::put('/{id}', [SavedController::class, 'update'])->name('saved_update');
    Route::delete('/{id}', [SavedController::class, 'delete'])->name('saved_delete');

});

Route::prefix('subscribe')->group(function () {
    Route::get('/', [SubscribeController::class, 'index'])->name('subscribe_index');
    Route::get('/{id}', [SubscribeController::class, 'show'])->name('subscribe_show');
    Route::post('/', [SubscribeController::class, 'store'])->name('subscribe_store');
    Route::put('/{id}', [SubscribeController::class, 'update'])->name('subscribe_update');
    Route::delete('/{id}', [SubscribeController::class, 'delete'])->name('subscribe_delete');

});
