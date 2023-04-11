<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\dashboardController;

Route::controller(dashboardController::class)->group(function () {
   Route::get('dashboard', 'index')->name('dashboard');
});
