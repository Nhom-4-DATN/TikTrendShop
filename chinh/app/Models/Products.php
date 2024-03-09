<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'id_product',
        'id_store',
        'id_category ',
        'name',
        'description',
        'status',
        'create_date',
        'update_date',
        'image_arr',
    ];
    
}