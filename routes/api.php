<?php

use Illuminate\Support\Facades\Route;

Route::get(config('api-check.route'), config('api-check.controller'))
    ->middleware(config('api-check.middleware'))
    ->name('api-check');
