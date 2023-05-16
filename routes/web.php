<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, 'index']);
Route::post('/bookinsert', [FrontendController::class, 'insert']);
Route::get('/bookedit', [FrontendController::class, 'edit']);
