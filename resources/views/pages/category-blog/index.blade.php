@extends('layouts.manager-stores')

@section('content')
    <div class="container-fluid d-flex  flex-column" style="height: calc(100% - 100px);">
        <div class="card shadow-sm mb-4">
            <div class="flex justify-content-between  align-items-center py-4 px-3">
                <div class="flex">
                    <a href="{{ route('manager.category.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle fs-4 "></i>
                        <span class="ms-2">Tạo mới</span>
                    </a>

                    <button type="button" class="btn btn-danger ms-2 ">
                        <i class="bi bi-x-octagon fs-4  "></i>
                        <span class="ms-2">Xóa nhanh</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card " style="flex: 1;">
            <div class="card-header">
                <h4>Danh mực bài đăng</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check text-center">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Sl bài viêt</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($categoryBlogList) > 0)
                            @php
                                $index = ($categoryBlogList->currentPage() - 1) * $categoryBlogList->perPage() + 1;
                            @endphp
                            @foreach ($categoryBlogList as $categoryBlog)
                                <tr>
                                    <th>
                                        <div class="form-check text-center ">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </th>
                                    <th scope="row"> {{ $index++ }}</th>
                                    <td>{{ $categoryBlog->name }}</td>
                                    <td>
                                        @if (!empty($categoryBlog->description))
                                            <div class="line-clamp-2" style="max-width: 200px;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="{{ $categoryBlog->description }}">
                                                {{ $categoryBlog->description }}
                                            </div>
                                        @endif
                                    </td>
                                    <td>0</td>
                                    <td>{{ date($categoryBlog->created_at) }}</td>
                                    <td>{{ $categoryBlog->status !== 1 ? 'Ẩn' : 'Hiển thị' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end ">
                                            <form action="{{ route('manager.category.delete', ['slug' => $categoryBlog->slug, 'id' => $categoryBlog->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi  bi-trash3 fs-6 "></i>
                                                    <span class="ms-1">Xóa</span>
                                                </button>
                                            </form>
                                            <a href="{{ route('manager.category.update', ['slug' => $categoryBlog->slug, 'id' => $categoryBlog->id]) }}" class="btn btn-warning ms-2">
                                                <i class="bi bi-pencil-square"></i>
                                                <span class="ms-1">Sửa</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @if (count($categoryBlog->children) > 0)
                                    @include('pages.category-blog.SubTable', ['level' => '--', 'data' => $categoryBlog->children])
                                @endif
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center ">không có dữ liệu</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
                @if (count($categoryBlogList) > 0)
                    {{ $categoryBlogList->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection
