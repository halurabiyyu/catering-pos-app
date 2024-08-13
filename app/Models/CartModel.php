<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartModel extends Model
{
    use HasFactory;

    protected $table = 'cart_models';
    protected $primaryKey = 'cart_id';
    protected $fillable = ['user_id', 'food_id'];
    public $timestamps = true;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function food() : BelongsTo {
        return $this->belongsTo(FoodModel::class, 'food_id', 'food_id');
    }
}
