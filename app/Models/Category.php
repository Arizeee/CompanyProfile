<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    //relasi has many kategori ke artikel
    public function Articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    
}
