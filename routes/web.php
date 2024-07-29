<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {
    return view('layout.template
    ');
});



Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');


Route::get('/login', [LoginController::class, 'index'])->name('login.index');

//Auth
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:1'], 'prefix'=>'admin'], function(){
        Route::group(['prefix' => 'dashboard'], function(){
            Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        });
        
        Route::group(['prefix' => 'level'], function(){
            Route::get('/', [LevelController::class, 'index'])->name('level.index');
            Route::post('/list', [LevelController::class, 'list'])->name('level.list');
            Route::get('/create', [LevelController::class, 'create'])->name('level.create');
            Route::post('/', [LevelController::class, 'store'])->name('level.store');
            Route::get('/{id}', [LevelController::class, 'show'])->name('level.show');
            Route::get('/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');
            Route::put('/{id}', [LevelController::class, 'update'])->name('level.update');
            Route::delete('/{id}', [LevelController::class, 'destroy'])->name('level.destroy');
        });
        Route::group(['prefix'=> 'user'], function(){
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::post('/list', [UserController::class, 'list'])->name('user.list');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/', [UserController::class, 'store'])->name('user.store');
            Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        });

        Route::group(['prefix'=> 'kategori'], function (){
            Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
            Route::post('/list', [KategoriController::class, 'list'])->name('kategori.list');
            Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
            Route::post('/', [KategoriController::class, 'store'])->name('kategori.store');
            Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
            Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update');
            Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
        });

        Route::group(['prefix'=> 'food'], function (){
            Route::get('/', [FoodController::class, 'index'])->name('food.index');
            Route::post('/list', [FoodController::class, 'list'])->name('food.list');
            Route::get('/create', [FoodController::class, 'create'])->name('food.create');
            Route::post('/', [FoodController::class, 'store'])->name('food.store');
            Route::get('/{id}/edit', [FoodController::class, 'edit'])->name('food.edit');
            Route::put('/{id}', [FoodController::class, 'update'])->name('food.update');
            Route::delete('/{id}', [FoodController::class, 'destroy'])->name('food.destroy');
        });
        
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => ['cek_login:2'], 'prefix' => 'cashier'], function(){
        Route::group(['prefix'=>'dashboard'], function() {
            Route::get('/', [DashboardController::class, 'cashier'])->name('cashier.dashboard'); 
        });
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => ['cek_login:3'], 'prefix' => 'customer'], function(){
        Route::get('/dashboard', [DashboardController::class, 'customer'])->name('customer.dashboard');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'checkout'], function(){
    Route::get('/', [CheckoutController::class, 'index'])->name('checkout.index');
});


