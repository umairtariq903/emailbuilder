<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Emailbuilder\App\Http\Controllers\EmailbuilderController;
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

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {

    Route::get('emailbuilder', fn (Request $request) => $request->user())->name('saveJson');
});

Route::post('/save-json',  [EmailbuilderController::class, 'storeJson']);
