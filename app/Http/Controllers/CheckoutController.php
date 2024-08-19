<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\DetailTransactionModel;
use App\Models\FoodModel;
use App\Models\TransactionModel;
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

    public function deleteCart($id) {
        $cart = CartModel::find($id);
        if ($cart) {
            $cart->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404); // Ensure the respons
    }

    public function process(Request $request)
    {
        // Ambil ID user yang sedang login
        $userId = Auth::id();
        

        // Ambil cart_id yang dicentang
        $cartIds = $request->input('carts');
        $quantities = $request->input('quantities');
        // dd($cartIds);

        if (empty($cartIds)) {
            return redirect()->back()->with('message', 'Tidak ada item yang dipilih.');
        }

        // Hitung total harga dari item yang dipilih
        $totalPrice = 0;
        $carts = CartModel::whereIn('cart_id', $cartIds)->get();

        foreach ($carts as $cart) {
            $quantity = $quantities[$cart->cart_id];
            $totalPrice += $cart->food->food_price * $quantity;
        }

        // Buat transaksi baru
        $transaction = TransactionModel::create([
            'user_id' => $userId,
            'total_harga' => $totalPrice,
            'status' => 'process',  // Status awal transaksi
            'created_at' => now()
        ]);

        // Simpan detail transaksi
        foreach ($carts as $cart) {
            $quantity = $quantities[$cart->cart_id];
            DetailTransactionModel::create([
                'transaction_id' => $transaction->transaction_id,
                'food_id' => $cart->food_id,
                'harga_satuan' => $cart->food->food_price,
                'kuantitas' => $quantity,
                'created_at' => now()
            ]);

            // Hapus item dari keranjang setelah checkout
            $cart->delete();
        }

        return redirect()->route('checkout.index')->with('success', 'Transaksi berhasil dilakukan.');
    }
}
