@extends('layouts.manager-stores')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4  bg-white">
            <div class="d-flex justify-content-between  align-items-center pe-4 py-3">
                <div class="px-3">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-calendar3"></i></div>
                                <select class="form-select" id="type-order">
                                    <option>Hôm nay</option>
                                    <option>Hôm qua</option>
                                    <option>Theo tuần</option>
                                    <option>Theo tháng</option>
                                    <option>Theo năm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden" for="type-order">Loại đơn hàng</label>
                            <select class="form-select" id="type-order">
                                <option selected>Đơn hàng đã xát nhận</option>
                                <option>Đơn Hàng chưa xát nhận</option>
                                <option value="2">Đơn Hàng đã hoàng thành</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Tảo biểu đồ</button>
                        </div>
                    </form>
                </div>
                <button class="btn btn-outline-secondary rounded-0">
                    <i class="bi bi-download fs-6 mb-1 "></i>
                    <span class="ms-1 fs-6 ">Tải dữ liệu</span>
                </button>
            </div>
        </div>
        <div class="card p-4 bg-white ">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 ">
                        <h4 class="fs-5 m-0">Tổng quan</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card p-3 ">
                                <div class="d-flex  justify-content-start align-items-center ">
                                    <h5 class="fs-6 m-0 ">Danh số</h5>
                                    <i class="bi bi-question-circle ms-2"></i>
                                </div>
                                <span class="fs-5 fw-bold mt-2">0đ</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 ">
                                <div class="d-flex  justify-content-start align-items-center ">
                                    <h5 class="fs-6 m-0 ">Tổng đơn hàng</h5>
                                    <i class="bi bi-question-circle ms-2"></i>
                                </div>
                                <span class="fs-5 fw-bold mt-2">0 đơn hàng</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 ">
                                <div class="d-flex  justify-content-start align-items-center ">
                                    <h5 class="fs-6 m-0 ">Đơn hàng đã bán</h5>
                                    <i class="bi bi-question-circle ms-2"></i>
                                </div>
                                <span class="fs-5 fw-bold mt-2">0đ</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 ">
                                <div class="d-flex  justify-content-start align-items-center ">
                                    <h5 class="fs-6 m-0 ">Số lượt xem trang</h5>
                                    <i class="bi bi-question-circle ms-2"></i>
                                </div>
                                <span class="fs-5 fw-bold mt-2">0đ</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3 ">
                                <div class="d-flex  justify-content-start align-items-center ">
                                    <h5 class="fs-6 m-0 ">Danh số mỗi đơn hàng</h5>
                                    <i class="bi bi-question-circle ms-2"></i>
                                </div>
                                <span class="fs-5 fw-bold mt-2">0đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="fs-5 fw-bold mb-2 ">Biểu đồ</h4>
                        <canvas id="chartjs-render-monitor" width="400" height="100" aria-label="Hello ARIA World" role="img"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-8">
                <div class="card bg-white p-4">
                    <h4 class="fs-5 fw-bold py-2">Thứ hạng sản phẩm</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 20px;">#</th>
                                <th class="text-start w-50">Tên sản phẩm</th>
                                <th class="text-center ">Số lượng đã bán</th>
                                <th class="text-end ">Số tiền đã bấn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Áo đỏ</td>
                                <td class="text-center ">1000</td>
                                <td class="text-end">20000tr</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-white p-4">
                    <h4 class="fs-5 fw-bold py-2">Thứ hạng danh mục</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 20px;">#</th>
                                <th class="text-start w-50">Tên danh mục</th>
                                <th class="text-center ">Số lượng đã bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Áo đỏ</td>
                                <td class="text-center ">1000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/chart.js'])
@endsection
