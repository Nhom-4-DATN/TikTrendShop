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
    protected $filterBlog;
    function __construct()
    {
        $this->blogModel = new Blog();
        $this->userModel = new User();
        Paginator::useBootstrapFour();
        $this->filterBlog = [
            'title' => 'title',
            'category' => 'id_categories_blog',
            'user' => 'id_user',
            'createdAt' => 'created_at',
            'like' => 'count_like',
        ];
    }
    function queryAllBlog()
    {
        $by = $_GET['by'] ?? 'DESC';
        $order = $this->filterBlog[$_GET['order'] ?? 'createdAt'];
        $blogQuery =  User::find(Auth::id())->oneStore->hasManyBlogs()
            ->with('category:id,name,slug')
            ->orderBy($order, $by);
        if (!empty($_GET['search'])) {
            $textSearch = "%" . $_GET['search'] . "%";
            $blogQuery->where('title', 'LIKE', $textSearch)
                ->orWhereHas('category', function ($query) use ($textSearch) {
                    $query->where('name', 'LIKE', $textSearch);
                });
        }
        if (!empty($_GET['view_min']) && !empty($_GET['view_min'])) {
            $blogQuery->whereBetween('count_views', [$_GET['view_min'], $_GET['view_min']]);
        }
        if (!empty($_GET['created_at_start']) && !empty($_GET['created_at_end'])) {
            $blogQuery->whereBetween('created_at', [$_GET['created_at_start'], $_GET['created_at_end']]);
        }
        return  $blogQuery;
    }
    function allToMe($paginate = null)
    {
        $blogQuery = $this->queryAllBlog();
        $data = isset($paginate) && $paginate != 0 ? $blogQuery->paginate($paginate)->onEachSide(2) : $blogQuery->get();
        return $data;
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
    function detail($id)
    {
        return $this->blogModel->find($id);
    }
    function update($id, $data)
    {
        $blog = $this->blogModel->find($id);
        return $blog->update([
            'title' => $data->title,
            'content' =>  $data->content,
            'id_categories_blog' => $data->category_id,
        ]);
    }
    function delete($arrId)
    {
        $blog = $this->blogModel->whereIn('id', $arrId);
        return $blog->delete();
    }
    function showAllDelete($paginate)
    {
        $blogQuery = $blogQuery = $this->queryAllBlog()->onlyTrashed();
        $data = isset($paginate) && $paginate != 0 ? $blogQuery->paginate($paginate)->onEachSide(2) : $blogQuery->get();
        return $data;
    }
    function restore($arrId)
    {
        $blog = $this->blogModel->withTrashed()->whereIn('id', $arrId);
        return $blog->restore();
    }
    function destroy($arrId)
    {
        $blog = $this->blogModel->withTrashed()->whereIn('id', $arrId);
        return $blog->forceDelete();
    }
}
