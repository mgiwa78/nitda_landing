<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::post('upload', [PostController::class, 'upload'])->name('upload');
Route::post('uploadImage', [PostController::class, 'uploadImage']);
Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
Route::post('/document', [DocumentController::class, 'store'])->name('document.store');

Route::get('posts', [PostController::class, "index"]);
Route::get("create", [PostController::class, "create"]);
Route::post('store', [PostController::class, "store"]);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
