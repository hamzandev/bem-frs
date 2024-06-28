<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departemen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    // function pengurus() : HasMany {
    //     return $this->hasMany(Pengurus::class);
    // }

    function pengurus_details() : HasMany {
        return $this->hasMany(PengurusDetail::class);
    }

    // Seorang pengurus bisa & hanya bisa menjadi ketua di sebuah departemen
    function pengurus() : BelongsTo {
        return $this->belongsTo(Pengurus::class);
    }

    function bidang() : BelongsTo {
        return $this->belongsTo(Bidang::class);
    }


}
