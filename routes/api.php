<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TemplatesController;
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

Route::get('/example', [ServicesController::class, 'example']);

Route::get('/{accountNum}/services', [ServicesController::class, 'getAllServices']);

Route::get('/{accountNum}/templates', [TemplatesController::class, 'getAllTemplates']);
Route::get('/{accountNum}/templates/{templateID}', [TemplatesController::class, 'getTemplateByID']);
Route::post('/{accountNum}/templates', [TemplatesController::class, 'createNewTemplate']);
