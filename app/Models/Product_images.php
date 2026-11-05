<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['product_id', 'image_path', 'is_primary', 'sort_order'])]
class Product_images extends Model
{
    public function product(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }
}
