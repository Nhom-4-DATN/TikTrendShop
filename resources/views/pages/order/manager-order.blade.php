@extends('layouts.manager-stores')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="my-4">Danh sách đơn hàng:</h2>
                @if ($orders->isEmpty())
                    <div class="alert alert-primary" role="alert">
                        Bạn không có đơn hàng nào!
                    </div>
                @else
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Cửa hàng</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Ghi chú</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->user->full_name }}</td>
                                    <td>{{ $order->store->name }}</td>
                                    <td>{{ $order->user->full_name }}</td>
                                    <td>{{ $order->note }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        @php
                                            switch ($order->status) {
                                                case 0:
                                                    echo '<div class="badge text-bg-primary text-wrap" style="width: 6rem;font-size: 0.8rem;">Chờ xác nhận</div>';
                                                    break;
                                                case 1:
                                                    echo '<div class="badge text-bg-danger text-wrap" style="width: 6rem;font-size: 0.8rem;">Huỷ đơn</div>';
                                                    break;
                                                case 2:
                                                    echo '<div class="badge text-bg-success text-wrap" style="width: 6rem;font-size: 0.8rem;">Giao hàng thành công</div>';
                                                    break;
                                                case 3:
                                                    echo '<div class="badge text-bg-warning text-wrap" style="width: 6rem;font-size: 0.8rem;">Đã giao cho đơn vị vận chuyển</div>';
                                                    break;
                                                default:
                                                    echo 'Không xác định';
                                            }
                                        @endphp
                                    </td>
                                    <td>
                                        <p>
                                            <a href="{{ route('order.manager.detail', $order->id) }}"
                                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover view-details">Xem chi tiết</a>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
