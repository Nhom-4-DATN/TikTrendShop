@extends('layouts.manager-stores')
@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header py-3">
                <h4 class="fw-bold fs-4">Tạo bài viết</h4>
            </div>
            <div class="card-body">
                <x-form.index action="{{ route('manager.blog.create') }}" mehtod="post">
                    <div>
                        <x-form.input id="title" name="title" lable="tên bài viết" />
                    </div>
                    <div class="mt-4">
                        <x-form.select lable="danh mục cha" id="name" name="category_id">
                            <option value="">Cấp lớn nhất</option>
                            @foreach ($categoryBlogList as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @if ($item->children->count() > 0)
                                    @include('pages.category-blog.subSelectFormCategoryBlog', ['data' => $item->children, 'level' => '--'])
                                @endif
                            @endforeach
                        </x-form.select>
                    </div>
                    <div class="mt-4">
                        <x-form.editor-textarea id="content" name="content" lable="nội dung bài viết" :style="'height:700px'" />
                    </div>
                    <button class="btn btn-primary mt-3">tạo bài viết</button>
                </x-form.index>
            </div>
        </div>
    </div>
@endsection
