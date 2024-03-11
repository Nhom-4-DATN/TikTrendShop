<?php

namespace App\Http\Controllers;

use App\Repository\Blog\BlogRepository;
use App\Repository\CategoryBlog\CategoryRepository;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $categoryService;
    protected $blogService;
    function __construct()
    {
        $this->categoryService = new CategoryRepository();
        $this->blogService = new BlogRepository();
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
    function create(Request $req)
    {
        try {
            $this->blogService->create($req);
            toastr()->success('Tạo bài đăng thành công', 'Tạo bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->success($e->getMessage(), 'Tạo bài đăng');
            return back();
        }
    }
}
