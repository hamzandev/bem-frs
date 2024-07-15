<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'slug', 'detail'];
    public function aspirasis()
    {
        return $this->hasMany(Aspirasi::class);
    }
    public function jurnals()
    {
        return $this->hasMany(Jurnal::class);
    }
}
