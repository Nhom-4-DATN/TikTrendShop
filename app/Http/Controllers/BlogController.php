<?php

namespace App\Http\Controllers;

use App\Repository\CategoryBlog\CategoryRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $categoryService;
    function __construct()
    {
        $this->categoryService = new CategoryRepository();
    }
    function manageBlog()
    {
        return view('pages.blog.manage-log');
    }
    function form()
    {
        $categoryBlogList = $this->categoryService->getAllToMe();
        return view('pages.blog.formCU', ['categoryBlogList' => $categoryBlogList]);
    }
    function create()
    {
    }
}
