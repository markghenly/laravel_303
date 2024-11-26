<?php

use App\Http\Controllers\EducationalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BookController;


use Illuminate\Support\Facades\Request;

Route::get('/app', function () {
    return view('welcome');
});
Route::get('/page1', [ProfileController::class, 'showProfile']);
Route::get('/page2', [EducationalController::class, 'showEducation']);

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('book',[BookController::class,'index']);

