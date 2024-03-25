<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'category_id', 'cost', 'price', 'brand_name', 'quantity', 'image', 'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

