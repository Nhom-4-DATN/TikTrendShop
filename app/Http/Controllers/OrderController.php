<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;
use App\Models\Stores;

class OrderController extends Controller
{
    function manager()
    {
        return view('pages.blog.manage-log');
    }
    function chart()
    {
        return view('pages.order.dashboard');
    }
    function list()
    {
        $userId = Auth::id();
        $orders = Order::where('id_store', $userId)
            ->with('user', 'store')
            ->get();
        return view('pages.order.manager-order', ['orders' => $orders]);
    }
    public function show($id)
    {
        // Lấy thông tin đơn hàng có ID là $id
        $show = Order::with('user', 'store')->findOrFail($id);
        // Trả về view 'pages.order.manager-order-detail' với dữ liệu đơn hàng chi tiết
        $showProduct = OrderDetails::with('product_variations')->findOrFail($id);
        return view('pages.order.manager-order-detail', compact('show', 'showProduct'));
    }
    public function confirmOrder($id)
    {
        $order = Order::find($id);
        if ($order) {
            $order->status = 3; // Cập nhật trạng thái đơn hàng từ 0 thành 3
            $order->save();
            return response()->json(['message' => 'Đơn hàng đã được xác nhận thành công']);
        } else {
            return response()->json(['error' => 'Đơn hàng không tồn tại'], 404);
        }
    }
    function delivery()
    {
        return view('pages.order.manager-order-delivery');
    }
}
