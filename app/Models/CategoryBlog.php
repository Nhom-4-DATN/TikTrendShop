<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class CategoryBlog extends Model
{
    use HasFactory, HasRecursiveRelationships;

    protected $table = 'categories_blog';
    protected $primaryKey = "id";
    protected $fillable = [
        'id_store',
        'name',
        'slug',
        'description',
        'status',
        'created_at',
        'updated_at',
        'parent_id'
    ];

    function children(): HasMany
    {
        return $this->hasMany(CategoryBlog::class, 'parent_id');
    }

    function isDescendantOf($parentId)
    {
        return $this->ancestors()->pluck('id')->contains($parentId);
    }
}
