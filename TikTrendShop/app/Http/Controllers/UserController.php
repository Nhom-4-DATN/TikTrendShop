<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function account()
    {
        // Kiểm tra xem người dùng có đăng nhập hay không
        if (Auth::check()) {
            // Lấy ID của người dùng đang đăng nhập
            $userId = Auth::id();

            // Lấy thông tin người dùng từ cơ sở dữ liệu
            $users = User::find($userId);

            // Kiểm tra xem người dùng có tồn tại hay không
            if ($users) {
                // Trả về view với dữ liệu người dùng
                return view('site.components.user.account-information', compact('users'));
                dd($users);
            } else {
                // Người dùng không tồn tại, quay về trang login
                return redirect()->route('login')->with('error', 'Người dùng không tồn tại.');
            }
        } else {
            // Người dùng chưa đăng nhập, quay về trang login
            return redirect()->route('login')->with('error', 'Người dùng chưa đăng nhập.');
        }
    }
}
