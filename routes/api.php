<?php

Route::apiResource('/builder','BuilderController');

Route::apiResource('/builder/{builder}/property','PropertyController');

Route::apiResource('/category','CategoryController');

Route::post('/like/{property}', 'LikeController@likeIt');

Route::delete('/like/{property}', 'LikeController@unLikeIt');

// use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
