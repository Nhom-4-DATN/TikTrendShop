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
            <li class="step0 active text-right text-center" id="step3">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Ví trí cửa hàng </p>
            </li>
            <li class="step0 text-right" id="step4">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light text-end">Hoàng thành </p>
            </li>
        </ul>
    </div>
@endsection
@section('form')
    <div class="mx-auto mb-5 " style="max-width: 800px;">
        <h1 class="fs-3 my-1">Địa chỉ cửa hàng offline</h1>
        <form action="{{ Route('manager.shop-update', $store->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-form.select-provinces name="address" />
            <div class="d-flex justify-content-end mt-4 align-content-center px-4">
                <button class="btn btn-primary" type="submit">Hoàng thành</button>
            </div>
        </form>
    </div>
    @vite(['resources/js/form.js'])
@endsection
