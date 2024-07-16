<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    
    protected $table = 'levels';
    protected $primaryKey = 'level_id';

    public $timestamps = true;

    protected $fillable = ['level_id','level_kode', 'level_nama'];

    public function user(): HasMany{
        return $this->hasMany(User::class);
    }
}
