@extends('layouts.manager-stores')
@section('content')
    @php
        $menuWorksList = [
            [
                'title' => 'Chờ xát nhận',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'Chời lấy hàng',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'Đã sử lý',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'Đã hủy',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'sản phẩm đã hết hàng',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'sản phẩm bị khóa',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'Trả / hoàng tiền đơn hàng',
                'value' => 0,
                'url' => '',
            ],
            [
                'title' => 'Chương trình khuyến mãi',
                'value' => 0,
                'url' => '',
            ],
        ];
    @endphp
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="card mb-4  bg-white p-3 pb-4">
                    <div class="mb-4 ">
                        <h4 class="fs-5 m-0 fw-bold  ">Danh sách cần làm</h4>
                        <span class="fs-6  text-secondary m-0 ">Những việc bạn sẽ phải làm</span>
                    </div>
                    <div class="row gy-4">
                        @foreach ($menuWorksList as $key => $menu)
                            <div class="col-3">
                                <div class="text-center border-end hover-bg-white py-2 ">
                                    <a href="{{ $menu['url'] }}" class="text-decoration-none text-black d-block w-100 h-100 ">
                                        <span>{{ $menu['value'] }}</span>
                                        <p class="m-0 mb-1  fw-light ">{{ $menu['title'] }}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card p-4 bg-white ">
                    <div class="mb-4 d-flex justify-content-between  align-items-center ">
                        <div>
                            <h4 class="fs-5 m-0 fw-bold  ">Phân Tích Bán Hàng</h4>
                            <span class="fs-6  text-secondary m-0 ">Tổng quan dữ liệu của shop đối với đơn hàng đã xác nhận</span>
                        </div>
                        <a class="btn btn-link fs-6 text-decoration-none ">Xem thêm <i class="bi bi-chevron-right ms-1"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <canvas id="chartjs-render-monitor" height="139"></canvas>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-between  align-items-center border-bottom ">
                                <div class="card border-0 p-4  bg-white  w-50 ">
                                    <div class="d-flex  mb-1 justify-content-start align-items-start ">
                                        <h5 class="m-0 " style="font-size: 14px;">Lượt truy cập</h5>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                            data-bs-title="Tổng số khách truy cập duy nhất đã xem trang chủ và trang sản phẩm của Shop trong khoảng thời gian được chọn. Mỗi khách xem một trang sản phẩm nhiều lần được tính là khách truy cập duy nhất.">
                                            <i class="bi bi-question-circle ms-2 position-relative " style="top: -4px;"></i>
                                        </span>
                                    </div>
                                    <span class="fw-bold fs-5 ">0</span>
                                    <span class="text-secondary ">so với hôm qua 0,00 %</span>
                                </div>
                                <div class="card border-0 p-4  bg-white   w-50 ">
                                    <div class="d-flex  mb-1 justify-content-start align-items-start ">
                                        <h5 class="m-0 " style="font-size: 14px;">Lượt xem</h5>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                            data-bs-title="Tổng số lượt xem trang chủ và trang sản phẩm của Shop trong khoảng thời gian được chọn (từ Máy tính và Ứng dụng)">
                                            <i class="bi bi-question-circle ms-2 position-relative " style="top: -4px;"></i>
                                        </span>
                                    </div>
                                    <span class="fw-bold fs-5 ">0</span>
                                    <span class="text-secondary ">so với hôm qua 0,00 %</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between  align-items-center ">
                                <div class="card border-0 p-4  bg-white  w-50 ">
                                    <div class="d-flex  mb-1 justify-content-start align-items-start ">
                                        <h5 class="m-0 " style="font-size: 14px;">Đơn hàng</h5>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Tổng giá trị đơn hàng đã xác nhận trong khoảng thời gian đã chọn">
                                            <i class="bi bi-question-circle ms-2 position-relative " style="top: -4px;"></i>
                                        </span>
                                    </div>
                                    <span class="fw-bold fs-5 ">0</span>
                                    <span class="text-secondary ">so với hôm qua 0,00 %</span>
                                </div>
                                <div class="card border-0 p-4  bg-white   w-50 ">
                                    <div class="d-flex  mb-1 justify-content-start align-items-start ">
                                        <h5 class="m-0 " style="font-size: 14px;">Tỷ lệ chuyển đổi </h5>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Tổng số khách truy cập và có đơn đã xác nhận chia tổng số khách truy cập trong khoảng thời gian đã chọn">
                                            <i class="bi bi-question-circle ms-2 position-relative " style="top: -4px;"></i>
                                        </span>
                                    </div>
                                    <span class="fw-bold fs-5 ">0 %</span>
                                    <span class="text-secondary ">so với hôm qua 0,00 %</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-4 bg-white mt-4">
                    <div class="mb-4 d-flex justify-content-between  align-items-center ">
                        <div>
                            <h4 class="fs-5 m-0 fw-bold  ">Đánh giá cửa hàng</h4>
                            <span class="fs-6  text-secondary m-0 ">Xem đánh giá Shop của bạn</span>
                        </div>
                        <a class="btn btn-link fs-6 text-decoration-none ">Xem thêm <i class="bi bi-chevron-right ms-1"></i></a>
                    </div>
                    <div class="row">
                        <div class="card  bg-white   py-4" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-1 h-100 d-flex justify-content-center align-items-center h-100 ">
                                    <span class="fw-bold fs-2 text-center ">5/10</span>
                                </div>
                                <div class="col-md-11">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-center align-items-center flex-column ">
                                                    <span class="text-warning ">
                                                        <i class="bi bi-star-fill fs-2 "></i>
                                                        <span class="fs-4 text-dark">(1)</span>
                                                    </span>
                                                    <span>0</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-center align-items-center flex-column ">
                                                    <span class="text-warning ">
                                                        <i class="bi bi-star-fill fs-2 "></i>
                                                        <span class="fs-4 text-dark">(2)</span>
                                                    </span>
                                                    <span>0</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-center align-items-center flex-column ">
                                                    <span class="text-warning ">
                                                        <i class="bi bi-star-fill fs-2 "></i>
                                                        <span class="fs-4 text-dark">(3)</span>
                                                    </span>
                                                    <span>0</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-center align-items-center flex-column ">
                                                    <span class="text-warning ">
                                                        <i class="bi bi-star-fill fs-2 "></i>
                                                        <span class="fs-4 text-dark ">(4)</span>
                                                    </span>
                                                    <span>0</span>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="d-flex justify-content-center align-items-center flex-column ">
                                                    <span class="text-warning ">
                                                        <i class="bi bi-star-fill fs-2 "></i>
                                                        <span class="fs-4 text-dark ">(5)</span>
                                                    </span>
                                                    <span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @vite(['resources/js/chart.js'])
@endsection
