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
        
        return view('allMenu', ['foods' => $food, 'categories'=>$category]  );
    }
    
    public function filterByHighPrice(){
        $foods = FoodModel::orderBy('food_price', 'desc')->get();
        $category = CategoryModel::latest()->get();
        return view('allMenu', ['foods' => $foods, 'categories'=>$category]);
    }
    public function filterByLowPrice(){
        $foods = FoodModel::orderBy('food_price', 'asc')->get();
        $category = CategoryModel::latest()->get();
        return view('allMenu', ['foods' => $foods, 'categories'=>$category]);
    }
    public function filterByAscName(){
        $foods = FoodModel::orderBy('food_name', 'asc')->get();
        $category = CategoryModel::latest()->get();
        return view('allMenu', ['foods' => $foods, 'categories'=>$category]);
    }
    public function filterByDescName(){
        $foods = FoodModel::orderBy('food_name', 'desc')->get();
        $category = CategoryModel::latest()->get();
        return view('allMenu', ['foods' => $foods, 'categories'=>$category]);
    }
}
