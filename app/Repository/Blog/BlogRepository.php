<?php

namespace App\Repository\Blog;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class BlogRepository
{
    protected $blogModel;
    protected $userModel;
    function __construct()
    {
        $this->blogModel = new Blog();
        $this->userModel = new User();
        Paginator::useBootstrapFour();
    }
    function allToMe($paginate = null)
    {
        $blogQuery =  User::find(Auth::id())->oneStore->hasManyBlogs()->with('category:id,name,slug');
        $data = isset($paginate) && $paginate != 0 ? $blogQuery->paginate($paginate)->onEachSide(2) : $blogQuery->get();
        return   $data;
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
    function CountItemToMe()
    {
        $blogList =  User::find(Auth::id())->oneStore->hasManyBlogs()->get();
        return $blogList->count();
    }
}
