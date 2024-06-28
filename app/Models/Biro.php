<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Biro extends Model
{
    use HasFactory;

    function pengurus_details() : HasMany {
        return $this->hasMany(PengurusDetail::class);
    }
}
