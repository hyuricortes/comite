<?php

use App\Http\Controllers\RecursosController;
use App\Http\Controllers\ClubesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// clubles
Route::get('/clubes', [ClubesController::class, 'index']);
Route::post('/clubes', [ClubesController::class, 'insert']);

// recursos
Route::get('/recursos', [RecursosController::class, 'index']);
Route::post('/recursos', [RecursosController::class, 'insert']);
Route::post('/recursos/consumir', [RecursosController::class, 'consumir']);
