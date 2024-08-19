<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionModel extends Model
{
    use HasFactory;

    public $table = 'transactions';

    protected $primaryKey = 'transaction_id';
    protected $fillable = ['user_id', 'detail_id'];
    public $timestamps = true;

    public function detail_transaction() :  HasMany{
        return $this->hasMany(DetailTransactionModel::class);
    }
}
