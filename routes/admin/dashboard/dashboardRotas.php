<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

/** Define uma lista de middlewares para rota **/
$middleware = [];

/** Lista de Rotas para o Dashboard */
Route::get('/admin', [DashboardController::class,'index'])->name('admin.index');