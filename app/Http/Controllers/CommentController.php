<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function comment(Request $request, $id_product, $name_product)
    {
         // Kiểm tra xem người dùng đã đăng nhập chưa
         if (auth()->check()) {
            // Người dùng đã đăng nhập, tiếp tục xử lý comment
            $comment = new Comments();
            $comment->id_product = $id_product;
            $comment->id_user = auth()->user()->id;
            $comment->content = $request->input('content');
            $comment->save();

            // Chuyển hướng định dùng
            return Redirect::route('productDetails', ['id' => $id_product, 'name_product' => $name_product]);
        } else {
            // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để comment.');
        }
    }
}