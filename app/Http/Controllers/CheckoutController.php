<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\FoodModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public $cart;
    public function index() {
        return view('checkout');
    }

    public function addCart(FoodModel $food){
        $cartFood = new CartModel();
        
    }
    public function mount() {
        $this->fetchCart();
    }
    public function fetchCart(){
        $this->cart = CartModel::all()->reverse();
    }
}
