<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\FoodModel;
use Exception;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public $cart;
    public function index() {
        return view('customer.checkout');
    }

    public function addCart(Request $request){
        $cartFood = new CartModel();
        $cartFood->food_name = $request->food_name;
        $cartFood->food_price = $request->food_price;
        $cartFood->save();
        $this->fetchCart();
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
