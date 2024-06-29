<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bidang extends Model
{
    use HasFactory;

    protected $guarded = [];

    function departemens() : HasMany {
        return $this->hasMany(Departemen::class);
    }

    // Seorang pengurus bisa & hanya bisa menjadi ketua di sebuah bidang
    function pengurus() : BelongsTo {
        return $this->belongsTo(Pengurus::class, 'kepala_bidang', 'id');
    }
}
