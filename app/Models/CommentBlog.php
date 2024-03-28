<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    use HasFactory;

    protected $table = 'comment_blog';
    protected $fillable = ['id_blog', 'id_user', 'content', 'status'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
