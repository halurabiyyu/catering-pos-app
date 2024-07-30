<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodModel extends Model
{
    use HasFactory;

    protected $table = 'food';
    protected $primaryKey = 'food_id';
    protected $fillable = ['food_code', 'food_name', 'food_price', 'food_desc'];

    public $timestamps = true;

    public function category(): BelongsTo{
        return $this->belongsTo(CategoryModel::class, 'category_id', 'category_id');
    }

}
