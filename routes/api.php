<?php

use App\Http\Controllers\Api\V1\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::get('categories', [HomeController::class, 'categories']);
    Route::get('featureTours', [HomeController::class, 'featureTours']);
    Route::get('destinations', [HomeController::class, 'destinations']);
});
