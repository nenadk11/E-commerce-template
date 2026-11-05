<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'slug', 'data_type', 'unit', 'is_filterable'])]
class Attributes extends Model
{
    /** @use HasFactory<\Database\Factories\AttributesFactory> */
    use HasFactory;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'category_attributes');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Products::class, 'product_attribute_values');
    }
}
