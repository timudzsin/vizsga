<?php

use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\StudyRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/studyrooms', [StudyRoomController::class, 'indexWithRoomTypes']);
Route::get('/roomtypes', [RoomTypeController::class, 'index']);
Route::put('/studyrooms/{id}', [StudyRoomController::class, 'update']);
Route::delete('/studyrooms/{id}', [StudyRoomController::class, 'destroy']);
