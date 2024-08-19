<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionModel extends Model
{
    use HasFactory;

    public $table = 'transactions';

    protected $primaryKey = 'transaction_id';
    protected $fillable = ['user_id', 'total_harga', 'status'];
    public $timestamps = true;

    public function detail_transaction() :  HasMany{
        return $this->hasMany(DetailTransactionModel::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(UserModel::class);
    }
}
