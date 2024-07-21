<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jurnal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
