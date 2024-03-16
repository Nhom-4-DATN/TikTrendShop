@extends('pages.manage-stores.register.index')
@section('progress-track')
    <div class="progress-track">
        <ul id="progressbar">
            <li class="step0 active font-2 " id="step1">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Thông tin cửa hàng</p>
            </li>
            <li class="step0  active text-center" id="step2">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Thiết lập địa chỉ giao trả hàng</p>
            </li>
            <li class="step0 text-right text-center" id="step3">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Ví trí cửa hàng </p>
            </li>
            <li class="step0 text-right" id="step4">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Hoàng thành </p>
            </li>
        </ul>
    </div>
@endsection
@section('form')
    <style>
        .location {
            display: flex;
            padding: 20px 32px 20px 40px;
            align-items: center;
            justify-content: center;
        }

        .location .content {
            flex: 1;
            margin-left: 32px;
        }
    </style>
    <div class="mx-auto mb-5 " style="max-width: 800px;">
        <div class="d-flex justify-content-between  align-content-center ">
            <div class="px-4">
                <h4 class="fw-bold fs-4 m-0 mb-1">Thiết lập vị trí</h4>
                <p class="m-0 fs-6 text-secondary ">quản lý việc vận chuyển giao nhận hàng</p>
            </div>
            <button class="btn btn-primary" style="max-height: 40px;" data-bs-toggle="modal" data-bs-target="#modal-location" data-url="{{ route('address.create') }}">
                <i class="bi bi-plus-circle "></i>
                Thêm vị trí mới
            </button>
        </div>
        <div class="list-location mt-5">
            <x-address.adderss-list />
        </div>
        <div class="d-flex justify-content-end mt-4 align-content-center px-4">
            <button class="btn btn-primary me-1 bg-white text-black border-secondary px-4" type="submit">Lưu</button>
            <a href="{{ Route('shop.register-address-offline') }}" class="btn btn-primary" type="submit">Tiếp theo</a>
        </div>
    </div>
@endsection
<x-modal.modal-location />
<x-modal.modal-message :id="'delete-location'" :title="'xóa vị trí'" :content="'bạn có muốn xóa vị trí nầy không'" />
