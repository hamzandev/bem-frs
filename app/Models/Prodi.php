<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    protected $fillable = [
        'nama',
        'foto_kahim',
        'logo',
        'deskripsi',
        'website',
    ];
    use HasFactory;

    function pengurus() : HasMany {
        return $this->hasMany(Pengurus::class);
    }
}
