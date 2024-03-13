@extends('layouts.manager-stores')
@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header py-3">
                <h4 class="fw-bold fs-4">{{ empty($blog) ? 'Tạo bài viết' : 'cập nhập bài viết' }} </h4>
            </div>
            <div class="card-body">
                <x-form.index action="{{ empty($blog) ? route('manager.blog.create') : route('manager.blog.update', ['id' => $blog->id]) }}" :method="empty($blog) ? 'POST' : 'PUT'">
                    <div>
                        <x-form.input id="title" name="title" lable="tên bài viết" :value="$blog->title ?? old('title')" />
                    </div>
                    <div class="mt-4">
                        <x-form.select lable="danh mục cha" id="name" name="category_id">
                            <option value="">Cấp lớn nhất</option>
                            @foreach ($categoryBlogList as $item)
                                <option value="{{ $item->id }}" {{ !empty($blog->id_categories_blog) && $blog->id_categories_blog == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @if ($item->children->count() > 0)
                                    @include('pages.category-blog.subSelectFormCategoryBlog', ['data' => $item->children, 'level' => '--'])
                                @endif
                            @endforeach
                        </x-form.select>
                    </div>
                    <div class="mt-4">
                        <x-form.editor-textarea id="content" name="content" lable="nội dung bài viết" :style="'height:700px'" :value="$blog->content ?? old('content')" />
                    </div>
                    <button class="btn btn-primary mt-3">{{ empty($blog) ? 'Đăng bài' : 'cập nhập ' }}</button>
                </x-form.index>
            </div>
        </div>
    </div>
@endsection
