<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'description', 'category_id', 'brand_id', 'is_active'])]
class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    protected $table = 'products';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brands::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImages::class);
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attributes::class, 'product_attribute_values');
    }
}
