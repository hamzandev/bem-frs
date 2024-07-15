<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aspirasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mahasiswa',
        'category_id',
        'telepon',
        'judul',
        'aspirasi',
        'is_anonimous',
    ];
    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
