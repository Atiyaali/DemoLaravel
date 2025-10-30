<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;

Route::get('/participants', [ParticipantController::class, 'index']);
Route::post('/participants', [ParticipantController::class, 'store']);

