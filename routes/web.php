<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewAppController;

Route::get('/', [NewAppController::class, 'showmain'] );
Route::get('/form', [NewAppController::class, 'showform']);
Route::post('/form', [NewAppController::class, 'storeinfo']);
Route::get('/table', [NewAppController::class, 'showtable']);

