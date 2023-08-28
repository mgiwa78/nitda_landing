<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/documents/show', [DocumentController::class, 'show'])->name('documents.show');
Route::get('/document/show', [DocumentController::class, 'show'])->name('document.all');

Route::post('/upload', [DocumentController::class, 'uploadImage'])->name('ckEditor.upload');

Route::get('/editor', 'EditorController@index');
Route::post('/save-document', 'EditorController@saveDocument');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});

Route::get('/approve_policy_documents', function () {
    return view('approve_policy_documents');
});
Route::get('/rule_making_process', function () {
    return view('rule_making_process');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/documents', function () {
    return view('documents');
});