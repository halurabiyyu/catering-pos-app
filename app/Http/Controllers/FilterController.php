<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\FoodModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilterController extends Controller
{
    public function filterByCategory($id)
    {
        $countCart = $this->countCart();
        $categories = CategoryModel::latest()->get();
        $category = CategoryModel::findOrFail($id);
        $foods = FoodModel::where('category_id', $id)->get();
        $currentCategoryId = $id;
        return view('/allMenu', compact('countCart','foods', 'category', 'categories', 'currentCategoryId'));
    }

    public function countCart() {
        if (Auth::user()) {
            $user = Auth::user();
            $carts = CartModel::with('food')->where('user_id', $user->user_id)->get();
            $countCart = count($carts);
            return $countCart;
        }
    }

}
