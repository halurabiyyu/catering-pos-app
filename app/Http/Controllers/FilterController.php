<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\FoodModel;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterByCategory($id)
    {
        $categories = CategoryModel::latest()->get();
        $category = CategoryModel::findOrFail($id);
        $foods = FoodModel::where('category_id', $id)->get();
        $currentCategoryId = $id;
        return view('/allMenu', compact('foods', 'category', 'categories', 'currentCategoryId'));
    }

    

}
