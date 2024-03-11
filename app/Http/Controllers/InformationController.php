<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class InformationController extends Controller
{

    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'user_name' => ['sometimes', 'string', 'min:6', 'max:15'],
            'full_name' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'regex:/^\+?[0-9]+$/i', 'min:10', 'max:15'],
            'email' => ['nullable', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::id())],
            'file' => ['nullable', 'file', 'image', 'max:10240'], // Định dạng ảnh và giới hạn kích thước 10MB
        ], [
            'user_name.min' => 'Tên người dùng phải có ít nhất :min ký tự.',
            'user_name.max' => 'Tên người dùng không được vượt quá :max ký tự.',
            'full_name.max' => 'Họ tên không được vượt quá :max ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại phải có ít nhất :min ký tự.',
            'phone.max' => 'Số điện thoại không được vượt quá :max ký tự.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá :max ký tự.',
            'email.unique' => 'Địa chỉ email đã tồn tại.',
            'file.image' => 'File phải là một hình ảnh.',
            'file.max' => 'Kích thước file không được vượt quá :max kilobytes.',
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Validation logic
        $this->validator($request)->validate();
        $user = Auth::user();

        // // Kiểm tra mật khẩu cũ nếu người dùng cung cấp
        // if ($request->filled('old_password')) {
        //     if (!Hash::check($request->input('old_password'), $user->password)) {
        //         return redirect()->back()->with('error', 'Mật khẩu cũ không chính xác.');
        //     }
        // }

        // Kiểm tra và cập nhật các trường nếu người dùng đã cung cấp giá trị mới
        $user->user_name = $request->filled('user_name') ? $request->input('user_name') : $user->user_name;
        $user->full_name = $request->filled('full_name') ? $request->input('full_name') : $user->full_name;
        $user->phone = $request->filled('phone') ? $request->input('phone') : $user->phone;
        $user->email = $request->filled('email') ? $request->input('email') : $user->email;

        // // Kiểm tra và cập nhật mật khẩu mới nếu người dùng đã cung cấp
        // if ($request->filled('new_password')) {
        //     $user->password = bcrypt($request->input('new_password'));
        // }

        // Kiểm tra xem có file được gửi lên không
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Lưu file vào thư mục storage/app/public/images/account
            $path = $file->storeAs('public/images/account', uniqid() . '_' . $file->getClientOriginalName());

            // Lấy đường dẫn đầy đủ của file
            $url = Storage::url($path);

            // Lưu đường dẫn vào CSDL
            $user->image = $url;
        }

        // Lưu thay đổi
        $user->save();

        return redirect()->back()->with('success', 'Thông tin đã được cập nhật.');
    }
}
