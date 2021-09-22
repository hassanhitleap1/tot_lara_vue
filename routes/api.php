<?php



Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'QuestionController');
Route::apiResource('/{question}/reply', 'ReplyController');
