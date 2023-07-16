<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrgsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/old', function () {
    //return view('welcome'); //This return blade
    //return inertia('Home'); // This return Vue 
    return Inertia::render('Home');
});


Route::get('/', [OrgsController::class, 'index']);


Route::get('/orgs', [OrgsController::class, 'index']);
Route::get('/orgs/index', [OrgsController::class, 'index']);
Route::get('/orgs/create', [OrgsController::class, 'create']);
Route::post('/orgs/save', [OrgsController::class, 'save']);