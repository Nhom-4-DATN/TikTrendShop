<div class="row">
    @foreach ($listAddress as $address)
        <div class="col-12">
            <div class="location">
                <div class="icon">
                    <i class="bi bi-geo-alt fs-3"></i>
                </div>
                <div class="content me-4">
                    <div class="mb-2 d-flex justify-content-start align-content-center ">
                        <span style="min-width: 100px;">Họ và tên</span>
                        <span>{{ $address->name }}</span>
                        <span class="ms-3">
                            @if ($address->is_default === 1)
                                <span class="badge rounded-sm text-bg-primary">mặt định</span>
                            @endif
                            @if ($address->return_address === 1)
                                <span class="badge rounded-sm text-bg-danger">Trả hàng</span>
                            @endif
                            @if ($address->delivery_address === 1)
                                <span class="badge rounded-sm text-bg-warning">giao hang</span>
                            @endif
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-content-center ">
                        <span class="title" style="min-width: 100px;">Số điện thoại</span>
                        <span class="text">{{ $address->phone }}</span>
                    </div>
                    <div class="d-flex justify-content-start align-content-center ">
                        <span class="title" style="min-width: 100px;">Địa chỉ</span>
                        <span class="text">{{ $address->address }}</span>
                    </div>
                </div>
                <div class="d-flex flex-nowrap ">
                    <button data-url="{{ route('address.update', ['id' => $address->id]) }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-location">Sửa</button>
                    @php
                        $disabled = false;
                        if ($address->is_default == 1 || $address->delivery_address == 1 || $address->return_address == 1) {
                            $disabled = true;
                        }
                    @endphp
                    <button data-url="{{ route('address.delete', ['id' => $address->id]) }}" class="btn btn-secondary ms-2" data-bs-toggle="modal" data-bs-target="#delete-location" {{ $disabled == 1 ? 'disabled' : '' }}>Xóa</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
