<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Sửa đường dẫn của model User
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Thêm Hash để sử dụng phương thức check mật khẩu
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => [__('Địa chỉ email chưa đăng ký, đăng ký đi ba :))')],
            ]);
        }

        // Kiểm tra mật khẩu bằng cách sử dụng Hash::check
        if (Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/');
        } else {
            throw ValidationException::withMessages([
                'password' => [__('Sai mật khẩu, vui lòng thử lại.')],
            ]);
        }
    }
}
