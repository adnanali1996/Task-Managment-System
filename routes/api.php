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

Route::apiResources(['user' => 'API\TaskController']);
Route::get('profile', 'API\UserController@profile')->name('user_profile');
// MARK TASK AS COMPLTED
Route::get('completed/{id}', 'API\TaskController@markCompleted')->name('MarkCompleted');
// MARK TASK AS INCOMPLETED
Route::get('incompleted/{id}', 'API\TaskController@markIncompleted')->name('MarkIncomplted');
//FOR UPDATTING PROFILE OF USER
Route::put('profile', 'API\UserController@update_profile')->name('update_profile');
