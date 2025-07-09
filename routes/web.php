<?php

// import
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// routing
Route::get('/', [HomeController::class, 'index']);
