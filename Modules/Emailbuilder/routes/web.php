<?php

use Illuminate\Support\Facades\Route;
use Modules\Emailbuilder\App\Http\Controllers\EmailbuilderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('emailbuilder', EmailbuilderController::class)->names('emailbuilder');
    Route::get('/editor', function () {
        return view('emailbuilder::editor');
    });
    Route::post('/email-builder-js/save-email-template', [EmailTemplateController::class, 'saveJson']);

});
