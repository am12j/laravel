<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/submit', [FirstController::class, 'signup']);
Route::post('/check', [FirstController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/rc', function () {
    return view('complainform');
});
Route::post('/sc', [firstcontroller::class, 'complaintsubmit']);
Route::get('/au', function () {
    return view('aboutus');
});
Route::get('/tracking', function () {
    return view('trackingform');
});
Route::post('/trackingsearch', [firstcontroller::class, 'trackingsearch']);
Route::post('/help', [firstcontroller::class, 'help']);