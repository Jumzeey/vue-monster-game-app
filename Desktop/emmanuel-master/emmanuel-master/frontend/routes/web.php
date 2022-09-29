<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagezController;
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
//for heroku https setup
if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/',[ PagezController::Class, 'home'])->name('home');
Route::get('/about',[ PagezController::Class, 'about'])->name('about');
Route::get('/services',[ PagezController::Class, 'services'])->name('services');
Route::get('/events',[ PagezController::Class, 'events'])->name('events');
Route::get('/talent',[ PagezController::Class, 'talents'])->name('talents');
Route::get('/photography',[ PagezController::Class, 'browns'])->name('browns eyez');
Route::get('/artiste',[ PagezController::Class, 'artiste'])->name('artiste');


