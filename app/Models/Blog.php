<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'categories_blog';
    protected $primaryKey = "id";
    protected $fillable = [
        'id_store',
        'id_categories_blog',
        'title',
        'content',
        'status',
        'image_arr',
        'created_at',
        'updated_at'
    ];
}
