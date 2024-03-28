<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repository\Blog\BlogRepository;
use App\Repository\CategoryBlog\CategoryRepository;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $categoryService;
    protected $blogService;
    protected $blogModal;
    function __construct()
    {
        $this->categoryService = new CategoryRepository();
        $this->blogService = new BlogRepository();
        $this->blogModal = new Blog();
    }
    function blog()
    {
        return view('site.components.user.blog');
    }
    function manageBlog()
    {
        try {
            $blogList = $this->blogService->allToMe(25);
            $countBlog =  $this->blogService->CountItemToMe();
            return view('pages.blog.blog-tab-nav-all', ['blogList' => $blogList, 'countBlog' => $countBlog]);
        } catch (Exception $e) {
            return back();
        }
    }
    function trash()
    {
        $blogList = $this->blogService->showAllDelete(25);
        $countBlog =   $this->blogModal->onlyTrashed()->count();
        return view('pages.blog.blog-tab-nav-trash', ['blogList' => $blogList, 'countBlog' => $countBlog]);
    }
    function form($id = null)
    {
        $blog = $this->blogService->detail($id);
        $categoryBlogList = $this->categoryService->getAllToMe();
        return view('pages.blog.formCU', ['categoryBlogList' => $categoryBlogList, 'blog' => $blog]);
    }
    function create(Request $req)
    {
        try {
            $this->blogService->create($req);
            toastr()->success('Tạo bài đăng thành công', 'Tạo bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'Tạo bài đăng');
            return back();
        }
    }
    function filter()
    {
        try {
            $blogList = $this->blogService->allToMe(25);
            return view('components.table.table-blog', ['data' => $blogList]);
        } catch (Exception $e) {
            return back();
        }
    }
    function edit($id, Request $req)
    {
        try {
            $this->blogService->update($id, $req);
            toastr()->success('Cập nhập bài đăng thành công', 'cập nhập bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'cập nhập bài đăng');
            return back();
        }
    }
    function delete(Request $req)
    {
        try {
            $arr = explode(',', $req->id);
            if (!$arr > 0 || $arr[0] == '') {
                return throw new Exception('xóa thất bại');
            }
            $this->blogService->delete($arr);
            toastr()->success('xóa thành công', 'xóa  bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'xóa  bài đăng');
            return back();
        }
    }
    function restore(Request $req)
    {
        try {
            $arr = explode(',', $req->id);

            if (!$arr > 0 || $arr[0] == '') {
                return throw new Exception('xóa thất bại');
            }
            $this->blogService->restore($arr);
            toastr()->success('Đã khôi phục', 'khôi phục  bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'khôi phục  bài đăng');
            return back();
        }
    }
    function destroy(Request $req)
    {
        try {
            $arr = explode(',', $req->id);
            if (!$arr > 0 || $arr[0] == '') {
                return throw new Exception('xóa thất bại');
            }
            $this->blogService->destroy($arr);
            toastr()->success('đã xóa hoàng toàn bài đăng nầy', 'loại bỏ bài đăng');
            return back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'loại bỏ bài đăng');
            return back();
        }
    }
}
