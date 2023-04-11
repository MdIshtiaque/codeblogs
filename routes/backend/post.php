<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PostController;

Route::controller(PostController::class)->group(function () {
    Route::get('post', 'index')->name('post');
});
