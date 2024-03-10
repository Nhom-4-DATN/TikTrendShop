<?php

namespace App\Repository\Blog;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogRepository
{
    protected $blogModel;
    protected $userModel;
    function __construct()
    {
        $this->blogModel = new Blog();
        $this->userModel = new User();
    }
    function create($data)
    {
        $store = $this->userModel->find(Auth::id())->oneStore;
        $blog = $this->blogModel->create([
            'title' => $data->title,
            'content' => $data->content,
            'id_categories_blog' => $data->category_id,
            'id_user' => Auth::id(),
            'id_store' => $store->id,
        ]);
        return $blog;
    }
}
