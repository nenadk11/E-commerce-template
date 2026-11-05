<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'logo_path'])]
class Brands extends Model
{
    /** @use HasFactory<\Database\Factories\BrandsFactory> */
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
}
