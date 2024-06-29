<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengurus extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'nama',
    //     'nim',
    //     'gender',
    //     'foto',
    //     'telepon',
    //     'tanggal_lahir',
    // ];

    // Seorang pengurus memiliki 1 informasi detail
    function pengurus_detail() : HasOne {
        return $this->hasOne(PengurusDetail::class);
    }

    // Sebuah deparemen memiliki 1 pengurus sebagai ketua departemen
    function departemen() : HasOne {
        return $this->hasOne(Departemen::class, 'kepala_departemen');
    }

    // Sebuah bidang memiliki 1 pengurus sebagai ketua bidang
    function bidang() : HasOne {
        return $this->hasOne(Bidang::class, 'kepala_bidang');
    }

    // Sebuah Biro memiliki 1 pengurus sebagai Kepala/Ketua Biro
    function biro() : HasOne {
        return $this->hasOne(Biro::class, 'kepala_biro');
    }

    function jabatan() : BelongsTo {
        return $this->belongsTo(Jabatan::class);
    }

    function prodi() : BelongsTo {
        return $this->belongsTo(Prodi::class);
    }

}
