<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengurusDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    function pengurus() : BelongsTo {
        return $this->belongsTo(Pengurus::class);
    }

    function kabinet() : BelongsTo {
        return $this->belongsTo(Kabinet::class);
    }

    // function prodi() : BelongsTo {
    //     return $this->belongsTo(Prodi::class);
    // }

    // function jabatan() : BelongsTo {
    //     return $this->belongsTo(Jabatan::class);
    // }

    function departemen() : BelongsTo {
        return $this->belongsTo(Departemen::class);
    }

    function biro() : BelongsTo {
        return $this->belongsTo(Biro::class);
    }

}
