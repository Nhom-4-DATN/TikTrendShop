@extends('pages.manage-stores.register.index')
@section('progress-track')
    <div class="progress-track">
        <ul id="progressbar">
            <li class="step0 active font-2 " id="step1">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Thông tin cửa hàng</p>
            </li>
            <li class="step0  text-center" id="step2">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light ">Thiết lập địa chỉ giao trả hàng</p>
            </li>
            <li class="step0 text-right text-center" id="step3">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light text-end">Ví trí cửa hàng </p>
            </li>
            <li class="step0 " id="step4">
                <i class="bi bi-shop"></i>
                <p class="fs-5 mt-0 fw-light text-end  ">Hoàng thành </p>
            </li>
        </ul>
    </div>
@endsection
@section('form')
    <div class="mx-auto" style="max-width: 700px;">
        <x-form.index :action="route('register.shop')" :class="'row g-3 needs-validation'" novalidate :method="'POST'" :enctype="'multipart/form-data'">
            <div class="col-3">
                <div class="position-relative rounded-1 overflow-hidden">
                    <x-form.input-image :src="asset('images/default/shop.jpeg')" :name="'thumb-image'" />
                    <p class="position-absolute bottom-0 left-0 right-0 text-center m-0 w-100 bg-dark bg-opacity-50 text-white py-1 ">sữa hình ảnh</p>
                </div>
            </div>
            <div class="col-9">
                <div class="m-0">
                    <x-form.input :name="'name_shop'" :lable="'tên cửa hàng'" maxlength="30" :value="$store['name'] ?? ''" />
                    @error('slug')
                        <div class="fs-6 text-danger ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <x-form.input :name="'phone_number'" :lable="'số điện thoại'" maxlength="30" :value="$store['phone'] ?? ''" />
                </div>
                <div class="mt-3">
                    <x-form.input :name="'email'" :lable="'email'" maxlength="30" :value="$store['email'] ?? Auth::user()->email" />
                </div>
                <div class="mt-3">
                    <x-form.textarea :lable="'mô tả cửa hàng'" :maxlength="250" :name="'description'" :value="$store['description'] ?? ''" :style="'height:150px'" />
                </div>
                <div class="d-flex justify-content-end mt-4 align-content-center ">
                    <button class="btn btn-primary me-1 bg-white text-black border-secondary px-4" type="submit">Lưu</button>
                    <button class="btn btn-primary" type="submit">Tiếp theo</button>
                </div>
            </div>
        </x-form.index>
    </div>
@endsection
