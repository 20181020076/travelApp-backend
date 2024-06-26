<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\HistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/countries", [CountriesController::class, "getList"]);
Route::get("/countries/{id}", [CountriesController::class, "find"]);

Route::get("/histories", [HistoryController::class, "getAll"]);
Route::post("/histories", [HistoryController::class, "create"]);
