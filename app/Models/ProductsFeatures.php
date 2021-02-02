<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsFeatures extends Model
{
    protected $table = 'products_features';
    protected $fillable = [
        'name', 'description', 'product_id'
    ];
}
