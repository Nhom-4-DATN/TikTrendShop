<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_name' => ['required', 'string', 'min:6', 'max:15'],
            'full_name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'string', 'regex:/^\+?[0-9]+$/i', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'terms_and_conditions' => ['required', 'accepted'], // Thêm quy tắc cho checkbox Điều khoản và Điều kiện
        ], [
            'user_name.required' => 'Vui lòng nhập tên người dùng.',
            'user_name.string' => 'Tên người dùng phải là một chuỗi.',
            'user_name.min' => 'Tên người dùng phải có ít nhất :min ký tự.',
            'user_name.max' => 'Tên người dùng không được vượt quá :max ký tự.',

            'full_name.required' => 'Vui lòng nhập họ tên.',
            'full_name.string' => 'Họ tên phải là một chuỗi.',
            'full_name.max' => 'Họ tên không được vượt quá :max ký tự.',

            // 'phone.required' => 'Vui lòng nhập số điện thoại.',
            // 'phone.string' => 'Số điện thoại phải là một chuỗi.',
            // 'phone.regex' => 'Số điện thoại không hợp lệ.',
            // 'phone.max' => 'Số điện thoại không được vượt quá :max ký tự.',
            // 'phone.unique' => 'Số điện thoại đã tồn tại.',

            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.string' => 'Địa chỉ email phải là một chuỗi.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá :max ký tự.',
            'email.unique' => 'Địa chỉ email đã tồn tại.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là một chuỗi.',
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',

            'terms_and_conditions.required' => 'Vui lòng chấp nhận Điều khoản và Điều kiện.',
            'terms_and_conditions.accepted' => 'Bạn phải chấp nhận Điều khoản và Điều kiện để tiếp tục.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'full_name' => $data['full_name'],
            // 'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'terms_and_conditions' => isset($data['terms_and_conditions']), // Thiết lập giá trị cho checkbox Điều khoản và Điều kiện
        ]);
    }
}
