<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

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
            Route::put('/', [LevelController::class, 'update'])->name('level.update');
            Route::delete('/{id}', [LevelController::class, 'destroy'])->name('level.destroy');
        });
        Route::group(['prefix'=> 'user'], function(){
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::post('/list', [UserController::class, 'list'])->name('user.list');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/', [UserController::class, 'store'])->name('user.store');
            Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/', [UserController::class, 'update'])->name('user.update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        });
        
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => ['cek_login:2'], 'prefix' => 'cashier'], function(){
        
    });
    Route::group(['middleware' => ['cek_login:3'], 'prefix' => 'customer'], function(){

    });
});




