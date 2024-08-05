<?php

namespace App\Http\Controllers;

use App\Models\FoodModel;
use Illuminate\Http\Request;

class AllMenuController extends Controller
{
    public function index(){
        $food = FoodModel::latest()->get();

        return view('allMenu', ['foods' => $food]);
    }
}
