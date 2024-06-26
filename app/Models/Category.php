<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    function aspirasis() : HasMany {
        return $this->hasMany(Aspirasi::class);
    }

    function jurnals() : HasMany {
        return $this->hasMany(Jurnal::class);
    }
}
