<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = "id";
    protected $fillable = [
        'id_store',
        'id_categories_blog',
        'title',
        'content',
        'status',
        'image_arr',
        'created_at',
        'updated_at',
    ];
    function category(): BelongsTo
    {
        return $this->belongsTo(CategoryBlog::class, 'id_categories_blog');
    }
}
