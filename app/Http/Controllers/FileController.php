<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        // Kiểm tra xem có file được gửi lên không
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Lưu file vào thư mục storage/app/public/image/account
            $path = $file->storeAs('public/images/account', uniqid() . '_' . $file->getClientOriginalName());

            // Lấy đường dẫn đầy đủ của file
            $url = Storage::url($path);

            // Trả về đường dẫn file hoặc lưu vào CSDL tùy thuộc vào yêu cầu của bạn
            // Lưu đường dẫn vào CSDL
            User::create(['image' => $url]);

            return "File uploaded successfully. URL: $url";
        } else {
            User::create(['file_path' => 'default_path']); // Thay 'default_path' bằng giá trị mặc định thích hợp
            return "No file uploaded.";
        }


    }
}
