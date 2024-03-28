@extends('layouts.manager-stores')

@section('content')
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h4 {
        color: #333;
    }

    .total {
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="mb-4">
        <h4 class="text-center">Thông tin cửa hàng</h4>
        <p><strong>Tên cửa hàng:</strong> {{ $show->store->name }}</p>
        <p><strong>Địa chỉ cửa hàng:</strong> {{ $show->store->address }}</p>
        <p><strong>Số điện thoại cửa hàng:</strong> {{ $show->store->phone }}</p>
        <p><strong>Email cửa hàng:</strong> {{ $show->store->email }}</p>
        <p><strong>Trạng thái:</strong>
            @if($show->status == 0)
            <div class="badge text-bg-primary text-wrap" style="width: 6rem;font-size: 0.8rem;">Chờ xác nhận</div>
            @elseif($show->status == 1)
            <div class="badge text-bg-danger text-wrap" style="width: 6rem;font-size: 0.8rem;">Huỷ đơn</div>
            @elseif($show->status == 2)
            <div class="badge text-bg-success text-wrap" style="width: 6rem;font-size: 0.8rem;">Giao hàng thành công</div>
            @elseif($show->status == 3)
            <div class="badge text-bg-warning text-wrap" style="width: 6rem;font-size: 0.8rem;">Đã giao cho đơn vị vận chuyển</div>
            @else
                Không xác định
            @endif
        </p>

    </div>

    <div class="mb-4">
        <h4 class="text-center">Thông tin khách hàng</h4>
        <p><strong>Tên khách hàng:</strong> {{ $show->user->full_name }}</p>
        <p><strong>Tên nhận hàng:</strong> {{ $show->full_name }}</p>
        <p><strong>Địa chỉ khách hàng:</strong> địa chỉ khách hàng</p>
        <p><strong>Số điện thoại khách hàng:</strong> {{ $show->user->phone }}</p>
        <p><strong>Email khách hàng:</strong> {{ $show->user->email }}</p>
        <p><strong>Ghi chú:</strong> {{ $show->note }}</p>
    </div>
    <hr>
    <div>
        <h4>Chi tiết đơn hàng</h4>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$showProduct->product_variations->name}}</td>
                    <td>{{$showProduct->product_variations->quantity}}</td>
                    <td>{{$showProduct->product_variations->price}}</td>
                    <td>{{ $showProduct->product_variations->quantity * $showProduct->product_variations->price }} vnđ</td>
                </tr>
                <!-- Thêm các hàng sản phẩm khác tại đây -->
            </tbody>
            <tfoot>
                <tr class="total">
                    <td colspan="3">Tổng thanh toán</td>
                    <td>{{ $showProduct->product_variations->quantity * $showProduct->product_variations->price }} vnđ</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="modal-footer mt-4">
        <button class="btn btn-primary" id="confirmOrderBtn">Xác nhận đơn hàng</button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#confirmOrderBtn').click(function() {
            $.ajax({
                url: '{{ route("order.manager.confirm.order", $show->id) }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Chuyển hướng đến trang "manager-order-delyvery.blade.php"
                    window.location.href = '{{ route("order.manager.list") }}';
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection
