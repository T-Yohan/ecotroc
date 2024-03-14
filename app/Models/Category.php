<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
    ];

    //une catégorie peut avoir plusieurs produits
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
