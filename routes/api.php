<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', RegisterController::class)->name('register');

Route::get('/products', function() {
    $response = Http::get('https://fakestoreapi.com/products');

    $products = $response->json();
    // return $products;
    return view('testAPI', ['data' => $products]);
});

Route::get('/recipes', function() {
    $response = Http::get('https://masak-apa.tomorisakura.vercel.app/api/articles/new');

    $recipes = $response->json()['results'];
    return $recipes;
    // return view('testAPI', ['data' => $products]);
});


