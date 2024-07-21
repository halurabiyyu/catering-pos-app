<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey= 'category_id';
    protected $fillable = ['category_code', 'category_name'];

    public $timestamps = true;

    public function food() {
        return $this->hasMany(FoodModel::class);
    }
}
