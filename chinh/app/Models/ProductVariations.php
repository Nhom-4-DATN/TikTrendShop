<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariations extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_product_variation',
        'id_product',
        'name',
        'quantity',
        'price',
        'sale_price',
        'status',
        'create_date',
        'update_date',
        'image',
    ];
}