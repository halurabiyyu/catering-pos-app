<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTransactionModel extends Model
{
    use HasFactory;

    public $table = 'detail_transactions';

    protected $primaryKey = 'detail_id';
    protected $fillable = ['transaction_id', 'food_id', 'kuantitas', 'harga_satuan'];

    public $timestamps = true;

    public function transaction() : BelongsTo {
        return $this->belongsTo(TransactionModel::class);
    }

    public function food() : BelongsTo {
        return $this->belongsTo(FoodModel::class, 'food_id', 'food_id');
    }
}
