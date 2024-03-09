<?php

namespace App\Repository\Blog;

use App\Models\Blog;

class BlogRepository
{
    protected $blogModel;
    function __construct()
    {
        $this->blogModel = new Blog();
    }
    function create()
    {
    }
}
