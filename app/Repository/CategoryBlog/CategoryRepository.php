<?php

namespace App\Repository\CategoryBlog;

use App\Models\CategoryBlog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class CategoryRepository implements CategoryBlogInterface
{
    use HasRecursiveRelationships;

    protected $categoryBlogModel;
    function __construct()
    {
        $this->categoryBlogModel = new CategoryBlog();
    }
    function getAllToMe($paginate = null)
    {
        $categoryBlogQuery = User::find(Auth::id())
            ->oneStore->categoryBlogList()->with('children')
            ->withCount('hasManyBlogs')->whereNull('parent_id');
        $data = isset($paginate) && $paginate != 0 ? $categoryBlogQuery->paginate($paginate) : $categoryBlogQuery->get();
        return $data;
    }
    function details($id)
    {
        return $this->categoryBlogModel->where('id', '=', $id)->first() ?? [];
    }
    function Create($data)
    {
        $store = User::find(Auth::id())->oneStore()->where('id_user', '=', Auth::id())->first();
        $categoryBlog = $this->categoryBlogModel->create([
            'name' => $data->name,
            'slug' => Str::slug($data->name),
            'parent_id' => $data->parent_id ?? NULL,
            'description' => $data->description,
            'id_store' => $store->id
        ]);
        return $categoryBlog;
    }
    function edit($id, $data)
    {
        $categoryBlog = $this->categoryBlogModel->find($id);
        if (!empty($data->parent_id) && $this->categoryBlogModel->find($data->parent_id)->isDescendantOf($id)) {
            return ['status' => 422, 'message' => 'không thể cập nhập id con với id cha thuộc id con'];
        }
        $categoryBlog->update([
            'name' => $data->name,
            'slug' => Str::slug($data->name),
            'parent_id' => $data->parent_id ?? null,
            'description' => $data->description,
        ]);
        return $categoryBlog;
    }
    function delete($id)
    {
        $categoryBlog = $this->categoryBlogModel->find($id);
        $categoryBlog->delete();
        return $categoryBlog;
    }
    function showAllBlogDelete()
    {
    }
}
