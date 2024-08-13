<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(){
        if (Auth::user()) {
            $user = Auth::user();
            // $cart = CartModel::all();
            $carts = CartModel::with('food')->where('user_id', $user->user_id)->get();
            $countCart = count($carts);
            return view('welcome', ['countCart'=>$countCart]);
        }
        return view('welcome');
    }
}
