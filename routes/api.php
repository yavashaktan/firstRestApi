<?php
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
//use App\Person;
//use App\Http\Controllers\PersonController;
//use App\Http\Resources\PersonResource as PersonResource;
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



Route::apiResource('/person','PersonController');

