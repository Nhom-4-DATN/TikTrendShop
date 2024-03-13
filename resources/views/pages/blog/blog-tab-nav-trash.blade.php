@extends('pages.blog.manage-log')

@section('tab-content')
    <div class="row mb-3">
        <div class="col-6">
            <p class="fw-bold  fs-4 m-0">{{ $countBlog }} bài viết </p>
        </div>
        <div class="col-6">
            <div class="d-flex justify-content-end  align-content-center ">
                <form class="delete-now" action="{{ route('manager.blog.restore') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-primary ms-2 ">
                        <i class="bi bi-arrow-clockwise fs-5"></i>
                        <span class="ms-2">khôi phục nhiều</span>
                    </button>
                </form>
                <form class="delete-now" action="{{ route('manager.blog.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-2 ">
                        <i class="bi bi-x-octagon fs-5  "></i>
                        <span class="ms-2"> Xóa nhiều</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @php
        $index = ($blogList->currentPage() - 1) * $blogList->perPage() + 1;
    @endphp
    <div class="blog-table">
        <x-table.table-blog :data="$blogList" />
    </div>
    {{ $blogList->links('components/custom_pagination') }}
@endsection
