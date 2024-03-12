@extends('layouts.manager-stores')

@section('content')
    <style>
        .nav-tabs .nav-link {
            border: none;
            color: black;
        }

        .nav-tabs .nav-link.active {
            background-color: transparent;
            color: rgb(42, 60, 163);
            outline: none;
            border-bottom: 2px solid rgb(42, 60, 163);
        }
    </style>
    <div class="container">
        <div class="card shadow-sm mb-4">
            <div class=" py-3 px-3">
                <div class="row">
                    <div class="col-6">
                        <div class="flex">

                        </div>
                    </div>
                    <div class="col">
                        <form action="">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control py-2" placeholder="nhập thông tin">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white border-0 ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-all-blog" data-bs-toggle="tab" data-bs-target="#all-blog-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            Tất cả
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Đang hoạt động
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            đã ẩn
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            đã xóa
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-white ">
                <div class="tab-content" id="nav-tabContent">
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold  fs-4 m-0">{{ $countBlog }} bài viết </p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end  align-content-center ">
                                <a href="{{ route('manager.blog.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-circle fs-5 "></i>
                                    <span class="ms-2">Tạo mới</span>
                                </a>
                                <button type="button" class="btn btn-danger ms-2 ">
                                    <i class="bi bi-x-octagon fs-5  "></i>
                                    <span class="ms-2">Xóa nhanh</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @php
                        $index = ($blogList->currentPage() - 1) * $blogList->perPage() + 1;
                    @endphp
                    <div class="tab-pane fade show active mt-4 border-1" id="nav-all-blog" role="tabpanel" aria-labelledby="nav-all-blog-tab" tabindex="0">
                        <x-table.table-blog :data="$blogList" />
                        {{ $blogList->links('components/custom_pagination') }}
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
@endsection
