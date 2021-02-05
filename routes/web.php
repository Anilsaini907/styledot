<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\broadbandController;
use App\Http\Controllers\energyController;
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
    return view('welcome');
});

Route::get('/{broadband}/{product}',[broadbandController::class,'getBroadband']);
Route::get('/{energyprovidername}/{product}/{variant}',[energyController::class,'getEnergyPrice']);
Route::put('/energyprovider', [energyController::class,'updateprice']);
