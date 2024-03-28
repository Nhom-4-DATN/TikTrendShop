@extends('site.layout.app')

@section('title', 'Đăng nhập')

@section('content')
    <style>
        .checkbox-wrapper-46 input[type="checkbox"] {
            display: none;
            visibility: hidden;
        }

        .checkbox-wrapper-46 .cbx {
            margin: auto;
            -webkit-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        .checkbox-wrapper-46 .cbx span {
            display: inline-block;
            vertical-align: middle;
            transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child {
            position: relative;
            width: 18px;
            height: 18px;
            border-radius: 3px;
            transform: scale(1);
            vertical-align: middle;
            border: 1px solid #9098a9;
            transition: all 0.2s ease;
        }

        .checkbox-wrapper-46 .cbx span:first-child svg {
            position: absolute;
            top: 3px;
            left: 2px;
            fill: none;
            stroke: #ffffff;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 16px;
            stroke-dashoffset: 16px;
            transition: all 0.3s ease;
            transition-delay: 0.1s;
            transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-46 .cbx span:first-child:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #506eec;
            display: block;
            transform: scale(0);
            opacity: 1;
            border-radius: 50%;
        }

        .checkbox-wrapper-46 .cbx span:last-child {
            padding-left: 8px;
        }

        .checkbox-wrapper-46 .cbx:hover span:first-child {
            border-color: #506eec;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child {
            background: #506eec;
            border-color: #506eec;
            animation: wave-46 0.4s ease;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child svg {
            stroke-dashoffset: 0;
        }

        .checkbox-wrapper-46 .inp-cbx:checked+.cbx span:first-child:before {
            transform: scale(3.5);
            opacity: 0;
            transition: all 0.6s ease;
        }

        @keyframes wave-46 {
            50% {
                transform: scale(0.9);
            }
        }

        /* button */
        .btn-60,
        .btn-60 *,
        .btn-60 :after,
        .btn-60 :before,
        .btn-60:after,
        .btn-60:before {
            border: 0 solid;
            box-sizing: border-box;
        }

        .btn-60 {
            -webkit-tap-highlight-color: transparent;
            -webkit-appearance: button;
            background-color: #000;
            background-image: none;
            color: #fff;
            cursor: pointer;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
                Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
                Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-size: 100%;
            line-height: 1.5;
            margin: 0;
            -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
            padding: 0;
        }

        .btn-60:disabled {
            cursor: default;
        }

        .btn-60:-moz-focusring {
            outline: auto;
        }

        .btn-60 svg {
            display: block;
            vertical-align: middle;
        }

        .btn-60 [hidden] {
            display: none;
        }

        .btn-60 {
            background: none;
            box-sizing: border-box;
            color: #ffffff;
            display: block;
            font-weight: 900;
            -webkit-mask-image: none;
            padding: 1.5rem 11rem;
            position: relative;
            text-transform: uppercase;
        }

        .btn-60 span {
            background: rgb(52, 58, 64);
            border: 1px solid;
            border-radius: 999px;
            display: grid;
            inset: 0;
            place-items: center;
            pointer-events: none;
            position: absolute;
        }

        .btn-60:hover span {
            -webkit-animation: jello 0.8s;
            animation: jello 0.8s;
        }

        @-webkit-keyframes jello {

            0%,
            11.1%,
            to {
                transform: translateZ(0);
            }

            22.2% {
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }

            33.3% {
                transform: skewX(6.25deg) skewY(6.25deg);
            }

            44.4% {
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }

            55.5% {
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }

            66.6% {
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }

            77.7% {
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }

            88.8% {
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        @keyframes jello {

            0%,
            11.1%,
            to {
                transform: translateZ(0);
            }

            22.2% {
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }

            33.3% {
                transform: skewX(6.25deg) skewY(6.25deg);
            }

            44.4% {
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }

            55.5% {
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }

            66.6% {
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }

            77.7% {
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }

            88.8% {
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }
    </style>
    <div class="row">
        <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat"
            style="background-image: url(images/login-bg.jpg);"></div>
        <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
            <div class="card shadow-none border-0 ms-auto me-auto login-card">
                <div class="card-body rounded-0 text-left">
                    <h2 class="fw-700 display1-size display2-md-size mb-3">Đăng nhập vào <br>Tài khoản của bạn</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pe-0"></i>
                            <input id="email" type="text"
                                class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                placeholder="Địa chỉ email của bạn">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-1">
                            <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                            <input id="password" type="password"
                                class="style2-input ps-5 form-control text-grey-900 font-xss ls-3 @error('password') is-invalid @enderror"
                                name="password" autocomplete="current-password" placeholder="Mật khẩu">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class=" checkbox-wrapper-46 mt-3 mb-3">
                            {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Nhớ tài khoản') }}
                            </label> --}}

                            <input type="checkbox" id="cbx-46" class="inp-cbx form-check-input" name="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                            <label for="cbx-46" class="cbx" class="form-check-label" for="remember"><span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>{{ __('Nhớ tài khoản') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link fw-600 font-xsss text-grey-700  float-right"
                                    href="{{ route('password.request') }}">
                                    {{ __('Quên mật khẩu?') }}
                                </a>
                            @endif
                        </div>
                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1">
                                <button type="submit" class="btn-60">
                                    <span>
                                        {{ __('Đăng nhập') }}
                                    </span>
                                </button>
                            </div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Chưa có tài khoản
                                <a href="{{ route('register') }}" class="fw-700 ms-1">Đăng ký ngay</a>
                            </h6>
                        </div>
                    </form>


                    <div class="col-sm-12 p-0 text-center mt-2">

                        {{-- <h6 class="mb-0 d-inline-block bg-white fw-500 font-xsss text-grey-500 mb-3">Or, Sign in with your
                            social account </h6>
                        <div class="form-group mb-1"><a href="#"
                                class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 mb-2"><img
                                    src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with
                                Google</a></div>
                        <div class="form-group mb-1"><a href="#"
                                class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img
                                    src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in with
                                Facebook</a></div> --}}
                    </div>
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
                            <h2 class="fw-700 display1-size display2-md-size mb-4">Login into <br>your account</h2>
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
                                    <input type="checkbox" class="form-check-input mt-2" id="exampleCheck2">
                                    <label class="form-check-label font-xsss text-grey-500" for="exampleCheck2">Remember
                                        me</label>
                                    <a href="forgot.html" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot
                                        your Password?</a>
                                </div>
                            </form>

                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Login</a>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Dont have account <a
                                        href="register.html" class="fw-700 ms-1">Register</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-3 ">

                                <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or, Sign in
                                    with your social account </h6>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 mb-2"><img
                                            src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in
                                        with
                                        Google</a></div>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img
                                            src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in
                                        with Facebook</a></div>
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
                            <h2 class="fw-700 display1-size display2-md-size mb-4">Create <br>your account</h2>
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
                                    <input type="checkbox" class="form-check-input mt-2" id="exampleCheck3">
                                    <label class="form-check-label font-xsss text-grey-500" for="exampleCheck3">Accept
                                        Term and Conditions</label>
                                    <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                                </div>
                            </form>

                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</a>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a
                                        href="login.html" class="fw-700 ms-1">Login</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-3 ">

                                <h6 class="mb-0 d-inline-block bg-white fw-600 font-xsss text-grey-500 mb-4">Or, Sign in
                                    with your social account </h6>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 "><img
                                            src="images/icon-1.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in
                                        with Google</a></div>
                                <div class="form-group mb-1"><a href="#"
                                        class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img
                                            src="images/icon-3.png" alt="icon" class="ms-2 w40 mb-1 me-5"> Sign in
                                        with Facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <<<<<<< HEAD </div>
        =======
        >>>>>>> 3b670a24900a3e2e7fd60730786cf8f35d004e2c
    @endsection
