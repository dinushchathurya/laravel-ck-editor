<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CKEditorController;

Route::get('/', [CKEditorController::class, 'index']);
Route::post('/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');