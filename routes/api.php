<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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


Route::get('/static-data', function () {
    return response()->json([
        'status' => 'success',
        'data' => [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'role' => 'admin'
        ]
    ]);
});

Route::get('/mi-controlador', [AppController::class, 'index']);