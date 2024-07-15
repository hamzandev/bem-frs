<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aspirasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    function aspirasis_category() : BelongsTo {
        return $this->belongsTo(AspirasiCategory::class, 'aspirasis_category_id');
    }
}
