<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\FoodModel;
use Illuminate\Http\Request;

class AllMenuController extends Controller
{
    public function index(){
        $food = FoodModel::latest()->get();
        $category = CategoryModel::latest()->get();
        $currentCategory = 'all';
        return view('allMenu', ['foods' => $food, 'categories'=>$category, 'currentCategory' => $currentCategory]  );
    }
    
    public function filterByHighPrice(){
        $foods = FoodModel::orderBy('food_price', 'desc')->get();
        $category = CategoryModel::latest()->get();
        $currentFilter = 'descPrice';
        return view('allMenu', ['foods' => $foods, 'categories'=>$category, 'currentFilter'=>$currentFilter]);
    }
    public function filterByLowPrice(){
        $foods = FoodModel::orderBy('food_price', 'asc')->get();
        $category = CategoryModel::latest()->get();
        $currentFilter = 'ascPrice';
        return view('allMenu', ['foods' => $foods, 'categories'=>$category, 'currentFilter'=>$currentFilter]);
    }
    public function filterByAscName(){
        $foods = FoodModel::orderBy('food_name', 'asc')->get();
        $category = CategoryModel::latest()->get();
        $currentFilter = 'a-z';
        return view('allMenu', ['foods' => $foods, 'categories'=>$category, 'currentFilter'=>$currentFilter]);
    }
    public function filterByDescName(){
        $foods = FoodModel::orderBy('food_name', 'desc')->get();
        $category = CategoryModel::latest()->get();
        $currentFilter = 'z-a';
        return view('allMenu', ['foods' => $foods, 'categories'=>$category, 'currentFilter'=>$currentFilter]);
    }
    public function search(Request $request) {
        $search = $request->input('search');
        $foods = FoodModel::where('food_name', 'like', "%$search%")->get();
        $countFoods = count($foods);
        $categories = CategoryModel::latest()->get();
        return view('allMenu', compact('foods', 'categories', 'search', 'countFoods'));       
    }
}
