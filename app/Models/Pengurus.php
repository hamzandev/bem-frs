<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'prodi_id',
        'departemen_id',
        'jabatan',
        'gender',
        'tanggal_lahir',
        'tahun_kepengurusan',
        'foto',
    ];

    function departemen() {
        return $this->belongsTo(Departemen::class);
    }

    function prodi() {
        return $this->belongsTo(Prodi::class);
    }
}
