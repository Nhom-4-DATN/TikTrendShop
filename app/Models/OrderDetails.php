<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public function product_variations()
    {
        return $this->belongsTo(ProductVariations::class, 'id_product_variation');
    }
}
