<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/questions', [QuestionController::class, 'index']);

Route::post('/create', [QuestionController::class, 'store']);

Route::get(uri:'/user',action: function(Request $request): mixed{
    return $request->user();
})->middleware(middleware:'auth:sanctum');
