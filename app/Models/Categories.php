<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Database\Factories\CategoriesFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'description', 'parent_id'])]
#[Table(name: 'categories')]
class Categories extends Model
{
    /** @use HasFactory<CategoriesFactory> */
    use HasFactory;

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attributes::class, 'category_attributes');
    }
}
