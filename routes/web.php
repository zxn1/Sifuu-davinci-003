<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return inertia('Home');
})->name('app');

Route::get('/more', function () {
    return inertia('More');
})->name('app.more');

Route::get('/davinci', function() {
    return inertia('Davinci');
})->name('app.davichi');

Route::post('/sifu/ask', [Controller::class, 'askSifu'])->name('app.ask');