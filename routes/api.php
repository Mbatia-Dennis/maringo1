<?php
use Illuminate\Support\Facades\Route;

Route::get('/test', fn () => ['message' => 'Hello from API']);
