<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', [dashboardcontroller::class,'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class,'store'])->name('idea.create');


Route::get('/terms',function(){

    return view('terms');
});
