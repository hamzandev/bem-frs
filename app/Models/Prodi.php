<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Terduga Error Speelling
    function pengurus_details() : HasMany {
        return $this->hasMany(PengurusDetail::class);
    }
}
