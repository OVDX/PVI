<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\LabController;
Route::get('/', function () {
    $data = [
        'name' => 'Edward', 
        'role' => 'Student'
    ];
    return view('welcome', $data);
});

Route::get('/lab', [LabController::class, 'index']);
Route::get('/contact', [LabController::class, 'contact']);
Route::get('/about', [LabController::class, 'about'])->middleware(CheckAge::class);