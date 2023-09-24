<?php

use App\Http\Controllers\DowntubeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [DowntubeController::class, 'index']);