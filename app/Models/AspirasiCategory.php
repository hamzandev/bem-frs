<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AspirasiCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
    ];

    function aspirasis() : HasMany {
        return $this->hasMany(Aspirasi::class, 'aspirasis_category_id', 'id');
    }
}
