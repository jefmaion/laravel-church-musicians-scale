<?php

use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberInstrumentController;
use Illuminate\Support\Facades\Route;

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

Route::resource('member', MemberController::class);
// Route::resource('member/{member}/instrument', MemberInstrumentController::class, ['as' => 'member']);
Route::resource('instrument', InstrumentController::class);
