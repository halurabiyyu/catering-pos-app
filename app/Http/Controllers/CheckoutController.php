<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\FoodModel;
use App\Models\UserModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public $cart;
    public function index() {
        $user = Auth::user();
        $carts = CartModel::with('food')->where('user_id', $user->user_id)->get();
        $countCart = count($carts);
        return view('customer.checkout', ['carts'=>$carts, 'countCart' => $countCart]);
    }

    public function countCart() {
        if (Auth::user()) {
            $user = Auth::user();
            $carts = CartModel::with('food')->where('user_id', $user->user_id)->get();
            $countCart = count($carts);
            return $countCart;
        }
    }

    public function mount() {
        $this->fetchCart();
    }
    public function fetchCart(){
        $this->cart = CartModel::all()->reverse();
    }

    public function countProductCart() {
        $cart = CartModel::latest()->get();
        $countCart = count($cart);
    }

    public function deleteCart(CartModel $cart) {
        try {
            $cart->deleteOrFail();
            $this->fetchCart();
        } catch (Exception $e) {
            echo $e;            
        }
    }
}
