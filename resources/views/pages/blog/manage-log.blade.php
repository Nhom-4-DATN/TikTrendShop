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
            <form action="{{ route(Route::currentRouteName()) }}">
                <div class=" py-3 px-3">
                    <div class="row gy-3">
                        <div class="col-6 ">
                            <div class="d-flex ">
                                <span class="m-0 me-2" style="min-width: 100px">số lượng view</span>
                                <input type="text" class="form-control py-2 w-25" placeholder="số lượng tối thiểu" name="view_min">
                                <span class="m-2 ">-</span>
                                <input type="text" class="form-control py-2 w-25" placeholder="số lượng tối đa" name="view_max">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <span style="min-width: 100px;">theo tên</span>
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control py-2" placeholder="nhập thông tin" name="search" value="{{ old('search') }}">
                                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex ">
                                <span class="m-0 me-2" style="min-width: 100px">ngày tạo</span>
                                <input type="date" class="form-control py-2 w-25" placeholder="số lượng tối thiểu" name="created_at_start">
                                <span class="m-2 ">-</span>
                                <input type="date" class="form-control py-2 w-25" placeholder="số lượng tối đa" name="created_at_end">
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="d-flex ">
                                <span class="m-0 me-2" style="min-width: 100px">số lượng like</span>
                                <input type="text" class="form-control py-2 w-25" placeholder="số lượng tối thiểu">
                                <span class="m-2 ">-</span>
                                <input type="text" class="form-control py-2 w-25" placeholder="số lượng tối đa">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">Tìm kiếm</button>
                </div>
            </form>
        </div>

        <div class="card">
            <div class="card-header bg-white border-0 ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'manager.blog.index' ? 'active' : '' }}" href="{{ route('manager.blog.index') }}">
                            Tất cả
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'manager.blog.trash' ? 'active' : '' }}" href="{{ route('manager.blog.trash') }}">
                            đã xóa
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-white ">
                <div class="tab-content">
                    @yield('tab-content')
                </div>
            </div>
        </div>
    </div>
@endsection
