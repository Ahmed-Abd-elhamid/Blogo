<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('api/channels', 'API\ChannelController');
Route::resource('api/subcribes', 'API\SubscribeController')->except(['show'])->middleware('auth');
Route::resource('api/posts', 'API\PostController');
Route::resource('api/categories', 'API\CategoryController');
Route::resource('api/comments', 'API\CommentController')->except(['index', 'show'])->middleware('auth');
Route::resource('api/likes', 'API\LikeController')->except(['index', 'show'])->middleware('auth');
