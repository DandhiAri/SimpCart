<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('dashboard', [
        'title' => 'Dashboard',
        'active' => 'home',
    ]);
});
Route::get('/shop', function () {
    return view('home.shoppage', [
        'title' => 'Shop',
        'active' => 'shop',
    ]);
});
Route::get('/about', function () {
    return view('home.aboutpage', [
        'title' => 'About',
        'active' => 'about',
    ]);
});
Route::get('/lmao', function () {
    return view('testing.indext');
});
Route::get('/slide', function () {
    return view('testing.slide');
});

//=====================auth======================//

Route::get('/login', [AuthController::class, 'indexL']);
Route::post('/login', [AuthController::class, 'authenticate']);


//==========================================//
Route::get('/admin', function () {
    return view('layout.backlayout');
});
