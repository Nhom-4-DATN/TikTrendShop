@extends('layouts.manager-stores')
@section('content')
    <div class="container-sm">
        <div class="card shadow-sm mb-4">
            <div class="flex justify-content-between py-3 px-4">
                <div class="flex">
                    <a href="{{ route('manager.category-blog.index') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle fs-4 "></i>
                        <span class="ms-2">Quay lại</span>
                    </a>
                    <a href="{{ route('manager.category-blog.create') }}" class="btn btn-primary me-2">
                        <i class="bi bi-plus-circle fs-4 "></i>
                        <span class="ms-2">Tạo mới</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4> {{ !empty($categoryBlog->id) ? 'Cập nhập danh mục' : 'Tạo danh mục' }}</h4>
            </div>
            <div class="card-body">
                <x-form.form-category-blog :categoryBlogDetail="$categoryBlog ?? ''" />
            </div>
        </div>
    </div>
@endsection
