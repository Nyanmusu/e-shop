<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\UsersController;
use App\Models\carts;
use Illuminate\Routing\Controllers\Middleware;

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

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('login');
// })->Middleware('guest');

Route::get('/', function () { return view('login'); });
Route::post('/login', [UsersController::class,'auth']);

Route::get('/register', function () { return view('register'); });
Route::post('/register', [RegisterController::class,'store']);

Route::get('/shop', [ShopController::class,'shop_print']);


Route::get('/product/{id}', [ShopController::class,'product_detail']);

Route::post('/addcart/{id}', [CartController::class,'add_cart']);
Route::get('/cart', [CartController::class,'show']);
Route::get('/editcart/{products_id}/{qty}', [CartController::class,'edit']);
Route::get('/editcart/{id}', function (string $id){});
// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/admin', function () {
//     return view('admin');
// });

// route untuk CRUD Users
Route::get('/admin', [UsersController::class,'cetak']);
Route::delete('/admin/{id}', [UsersController::class,'delete']);
Route::get('/edituser/{id}', [UsersController::class,'edit']);
Route::put('/edituser/{id}', [ProductsController::class,'update']);

// route untuk CRUD Produk
Route::get('/Aproduct', [ProductsController::class,'cetak_prod']);
Route::delete('/Aproduct/{id}', [ProductsController::class,'delete']);
Route::get('/editproduct/{id}', [ProductsController::class,'edit']);
Route::put('/editproduct/{id}', [ProductsController::class,'update']);
Route::get('/addproduct', [ProductsController::class,'setor_pform']);
Route::post('/addproduct', [ProductsController::class,'setor_p']);

// route untuk CRUD kategori
Route::get('/Akategori', [CategoryController::class,'cetak_kat']);
Route::delete('/Akategori/{id}', [CategoryController::class,'delete']);
Route::get('/addkategori', function () { return view('admin_kat_add'); });
Route::post('/addkategori', [CategoryController::class,'setor']);

Route::get('/Aorder', function () {
    return view('admin_order');
});

Route::get('/AorderD', function () {
    return view('admin_orderD');
});

Route::get('/manage_user', function () {
    return view('admin_cst');
});

// Route::get('/cart', function () {
//     return view('cart');
// });