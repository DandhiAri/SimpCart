<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransController;
use App\Http\Controllers\ProductController;

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

//===============Homepage====================//
// Route::get('/', function () {
//     return view('dashboard', [
//         'title' => 'Dashboard',
//         'active' => 'home',
//     ]);
// });

Route::get('/', [ProductController::class, 'home']);
Route::get('/shop', [ProductController::class, 'shop']);
Route::get('/shop/{product:slug}', [ProductController::class, 'show']);
Route::get('/shop/{category:slug}', [ProductController::class, 'catslug']);
Route::get('/shop/{sort:slug}', [ProductController::class, 'sortindex']);
Route::get('/transaksi', [TransController::class, 'findex']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/{id}', [CartController::class, 'addcart']);
Route::get('/delcart/{id}', [CartController::class, 'deletecart']);
Route::post('/order', [CartController::class, 'confirm']);

//=====================auth======================//

Route::get('/regis', [AuthController::class, 'indexR']);
Route::post('/regis', [AuthController::class, 'regis']);

Route::get('/login', [AuthController::class, 'indexL']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

//====================admin======================//
Route::get('/admin', function () {
    return view('layout.backlayout');
});


Route::get('print-pdf/{type}', [TransController::class, 'invoice']);
Route::get('/updatetrans/{id}', [TransController::class, 'updatetrans']);
Route::get('/transecs/print', [TransController::class, 'print']);
Route::get('/transecs/printpdf', [TransController::class, 'printpdf']);

Route::resources([
    '/users' => UserController::class,
    '/products' => ProductController::class,
    '/transecs' => TransController::class,
    '/categories' => CateController::class,
]);
//===========================gakjelas====================//
