<?php

namespace App\Repository\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogRepository
{
    protected $blogModel;
    function __construct()
    {
        $this->blogModel = new Blog();
    }
    function create($data)
    {
        $blog = $this->blogModel->create([

            'title' => $data['title'],
            'content' => $data['content'],
            'id_categories_blog' => $data['id_category'],
            'id_user' => Auth::id(),
        ]);
        return $blog;
    }
}
