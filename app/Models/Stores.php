<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stores extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'thumb_url', 'slug', 'id_user', 'phone', 'name', 'address', 'status', 'follows', 'description', 'image_arr', 'created_at', 'updated_at'
    ];

    function categoryBlogList(): HasMany
    {
        return $this->hasMany(CategoryBlog::class, 'id_store');
    }
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    use HasFactory;
}
