<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1/','as' => 'api.'], function () {

    Route::resource('categories', CategoriesController::class);


    Route::get('/', [MainController::class, 'index']);
    Route::get('/admin/add/site', [MainController::class, 'addSite'])->name('add.site');

    Route::post('/check-domain', [MainController::class, 'checkSite'])->name('check.site');
});
