<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Database\Factories\BrandsFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'logo_path'])]
#[Table(name: 'brands')]
class Brands extends Model
{
    /** @use HasFactory<BrandsFactory> */
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
}
