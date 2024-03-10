<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
 
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');