<?php



Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'QuestionController');
Route::apiResource('/{question}/reply', 'ReplyController');
Route::post('reply/{like}', 'LikeController@like');
Route::delete('reply/{like}', 'LikeController@unLike');
