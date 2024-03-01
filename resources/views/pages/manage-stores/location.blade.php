@extends('layouts.manager-stores')
@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header py-3 border-bottom bg-white">
                <div class="d-flex justify-content-between  align-content-center ">
                    <div>
                        <h4 class="fw-bold fs-4 m-0 mb-1">Thiết lập vị trí</h4>
                        <p class="m-0 fs-6 text-secondary ">quản lý việc vận chuyển giao nhận hàng</p>
                    </div>
                    <button class="btn btn-primary" style="max-height: 40px;" data-bs-toggle="modal" data-bs-target="#modal-location" data-url="{{ route('address.create') }}">
                        <i class="bi bi-plus-circle "></i>
                        Thêm vị trí mới
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="list-location">
                    <x-address.adderss-list />
                </div>
            </div>
        </div>
    </div>
    <x-modal.modal-location />
    <x-modal.modal-message :id="'delete-location'" :title="'xóa vị trí'" :content="'bạn có muốn xóa vị trí nầy không'" />
@endsection
