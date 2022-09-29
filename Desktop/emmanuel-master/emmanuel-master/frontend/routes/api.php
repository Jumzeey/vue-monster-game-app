<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\event;
use App\Models\EventImages;
use App\Http\Controllers\eventController;
use App\Http\Controllers\EventImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//custom api
Route::apiResource('events', 'eventController');
Route::apiResource('eventImages', 'eventImageController');


//event api CRUD
/*
1. create request (POST)
2. get all request (GET)
3. get a single event (GET) --> not needed for now
4. update an event (PUT/PATCH) --> not needed for now
5. delete an event (DELETE) -->not needed for now 
*/
