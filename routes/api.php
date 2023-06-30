<?php

use App\Http\ApiV1\Modules\Links\Controllers\LinkController;
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

Route::get('v1/link/{id}', [LinkController::class, 'get']);
Route::delete('v1/link/{id}', [LinkController::class, 'delete']);
Route::put('v1/link/{id}', [LinkController::class, 'replace']);
Route::patch('v1/link/{id}', [LinkController::class, 'patch']);
Route::post('v1/link', [LinkController::class, 'create']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
