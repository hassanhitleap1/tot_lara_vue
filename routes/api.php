<?php



Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'QuestionController');
Route::apiResource('/{question}/reply', 'ReplyController');
Route::post('reply/{like}', 'LikeController@like');
Route::delete('reply/{like}', 'LikeController@unLike');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
