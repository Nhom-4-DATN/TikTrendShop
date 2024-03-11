<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use App\Models\Stores;
use Illuminate\Http\Request;
use App\Repository\CategoryBlog\CategoryRepository;
use Exception;

class CategoryBlogController extends Controller
{
    protected $categoryBlogModel;
    protected $storeModel;
    protected $store;
    protected $categoryRepository;
    function __construct()
    {
        $this->categoryBlogModel = new CategoryBlog();
        $this->storeModel = new Stores();
        $this->categoryRepository = new CategoryRepository();
    }
    function index()
    {
        $categoryBlogList = $this->categoryRepository->getAllToMe(25);
        return view('pages.category-blog.index', ['categoryBlogList' => $categoryBlogList]);
    }
    function form($slug = null, $id = null)
    {
        $categoryBlog = $this->categoryRepository->details($id);
        return view('pages.category-blog.form', ['categoryBlog' => $categoryBlog]);
    }
    function create(Request $req)
    {
        try {
            $this->categoryRepository->create($req);
            toastr()->success('Tạo thành công', 'Tạo danh mục bài đăng');
            return back();
        } catch (Exception $e) {
            print_r(['status' => 300, 'message' => $e->getMessage()]);
        }
    }
    function edit(Request $req, $slug, $id)
    {
        try {
            $categoryBlog =   $this->categoryRepository->edit($id, $req);

            if (!empty($categoryBlog)  && $categoryBlog->status == 422) {
                throw new Exception($categoryBlog->message);
            }
            toastr()->success('cập nhập thành công', 'cập nhập danh mục bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'cập nhập danh mục bài đăng');
            return back();
        }
    }
    function delete(Request $req, $id)
    {
        try {
            $this->categoryRepository->delete($id);
            toastr()->success('xóa thành công', 'cập nhập danh mục bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error('cập nhập thất bại', 'cập nhập danh mục bài đăng');
        }
    }
    function trash()
    {
    }
}
