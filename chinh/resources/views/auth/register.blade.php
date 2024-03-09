@extends('site.layout.app')

@section('title', 'Đăng ký')

@section('content')
    <div class="row">
        <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat"
            style="background-image: url(images/login-bg-2.jpg);"></div>
        <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
            <div class="card shadow-none border-0 ms-auto me-auto login-card">
                <div class="card-body rounded-0 text-left">
                    <h2 class="fw-700 display1-size display2-md-size mb-4">Hãy tạo
                        <br>Tài khoản của bạn
                    </h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="user_name" type="text"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('user_name') is-invalid @enderror"
                                name="user_name" value="{{ old('user_name') }}" autocomplete="user_name" autofocus
                                placeholder="Tên tài khoản">
                            @error('user_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="full_name" type="text"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('full_name') is-invalid @enderror"
                                name="full_name" value="{{ old('full_name') }}" autocomplete="full_name"
                                placeholder="Họ và tên">
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="phone" type="text"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder="Số điện thoại">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="email" type="text"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email"
                                placeholder="Email của bạn ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="password" type="password"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}" autocomplete="new-password"
                                placeholder="Mật khẩu của bạn ">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pe-0"></i>
                            <input id="password-confirm" type="password"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                name="password_confirmation" value="{{ old('password') }}" autocomplete="new-password"
                                placeholder="Nhập lại mật khẩu của bạn ">
                        </div>
                        <div class="form-check text-left mb-3">
                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck2">
                            <label class="form-check-label font-xsss text-grey-500" for="exampleCheck2">Chấp nhận Điều khoản
                                và Điều kiện</label>
                            <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                        </div>

                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1">
                                <button type="submit"
                                    class="btn btn-primary form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">ĐÃ có tài khoản
                                <a href="{{ route ('login')}}" class="fw-700 ms-1">Đăng nhập</a></h6>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Login -->
    <div class="modal bottom fade" style="overflow-y: scroll;" id="Modallogin" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                        class="ti-close text-grey-500"></i></button>
                <div class="modal-body p-3 d-flex align-items-center bg-none">
                    <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                        <div class="card-body rounded-0 text-left p-3">
                            <h2 class="fw-700 display1-size display2-md-size mb-4">Login
                                into <br>your account</h2>
                            <form>

                                <div class="form-group icon-input mb-3">
                                    <i class="font-sm ti-email text-grey-500 pe-0"></i>
                                    <input type="text"
                                        class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                        placeholder="Your Email Address">
                                </div>
                                <div class="form-group icon-input mb-1">
                                    <input type="Password"
                                        class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                        placeholder="Password">
                                    <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input type="checkbox" class="form-check-input mt-2" id="exampleCheck4">
                                    <label class="form-check-label font-xsss text-grey-500" for="exampleCheck4">Remember
                                        me</label>
                                    <a href="forgot.html" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot
                                        your Password?</a>
                                </div>
                            </form>

                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Login</a>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont
                                    have account <a href="register.html" class="fw-700 ms-1">Register</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-3 ">

                                <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or,
                                    Sign in with your social account </h6>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 mb-2"><img
                                            src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign
                                        in with Google</a></div>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img
                                            src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign
                                        in with Facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal bottom fade" style="overflow-y: scroll;" id="Modalregister" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                        class="ti-close text-grey-500"></i></button>
                <div class="modal-body p-3 d-flex align-items-center bg-none">
                    <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                        <div class="card-body rounded-0 text-left p-3">
                            <h2 class="fw-700 display1-size display2-md-size mb-4">Create
                                <br>your account
                            </h2>
                            <form>

                                <div class="form-group icon-input mb-3">
                                    <i class="font-sm ti-user text-grey-500 pe-0"></i>
                                    <input type="text"
                                        class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group icon-input mb-3">
                                    <i class="font-sm ti-email text-grey-500 pe-0"></i>
                                    <input type="text"
                                        class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600"
                                        placeholder="Your Email Address">
                                </div>
                                <div class="form-group icon-input mb-3">
                                    <input type="Password"
                                        class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                        placeholder="Password">
                                    <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                </div>
                                <div class="form-group icon-input mb-1">
                                    <input type="Password"
                                        class="style2-input ps-5 form-control text-grey-900 font-xss ls-3"
                                        placeholder="Confirm Password">
                                    <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                </div>
                                <div class="form-check text-left mb-3">
                                    <input type="checkbox" class="form-check-input mt-2" id="exampleCheck7">
                                    <label class="form-check-label font-xsss text-grey-500" for="exampleCheck7">Accept
                                        Term and
                                        Conditions</label>
                                    <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                                </div>
                            </form>

                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already
                                    have account <a href="login.html" class="fw-700 ms-1">Login</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-3 ">

                                <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or,
                                    Sign in with your social account </h6>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 "><img
                                            src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign
                                        in with Google</a></div>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img
                                            src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign
                                        in with Facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
