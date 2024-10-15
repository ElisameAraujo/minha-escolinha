<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/** Define uma lista de middlewares para rota **/
$middleware = [];
Route::get('/admin', [DashboardController::class,'index'])->name('admin.index');