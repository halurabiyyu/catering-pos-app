<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    protected $table = 'cart_models';
    protected $primaryKey = 'cart_id';
    protected $fillable = ['food_name', 'food_price'];
    public $timestamps = true;
}
