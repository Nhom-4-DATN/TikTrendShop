<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    
    protected $fillable = [
        'id',
        'id_product',
        'id_user ',
        'content',
        'status',
        'create_date',
        'update_date',
    ];
}