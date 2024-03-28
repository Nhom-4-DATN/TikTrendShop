@extends('site.layout.layout')

@section('title', 'Change-password')

@section('content')
    <div class="middle-wrap">
        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                <a href="{{ route('default') }}" class="d-inline-block mt-2"><i
                        class="ti-arrow-left font-sm text-white"></i></a>
                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Đổi mật khẩu</h4>
            </div>
            <div class="card-body p-lg-5 p-4 w-100 border-0">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('change-password') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xssss">Mật khẩu hiện tại</label>
                                <div class="input-group">
                                    <input type="test" name="current_password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        id="currentPassword">
                                    <span class="input-group-text" id="toggleCurrentPassword"
                                        onclick="togglePassword('currentPassword', 'eyeIconCurrentPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @if ($errors->has('current_password'))
                                    <p class="text-danger">{{ $errors->first('current_password') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xssss">Mật khẩu mới</label>
                                <div class="input-group">
                                    <input type="text" name="new_password"
                                        class="form-control @error('new_password') is-invalid @enderror" id="newPassword">
                                    <span class="input-group-text" id="toggleCurrentPassword"
                                        onclick="togglePassword('newPassword', 'eyeIconCurrentPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @if ($errors->has('new_password'))
                                    <p class="text-danger">{{ $errors->first('new_password') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xssss">Xác nhận thay đổi mật khẩu</label>
                                <div class="input-group">
                                    <input type="text" name="confirm_password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        id="confirmPassword">
                                    <span class="input-group-text" id="toggleConfirmPassword"
                                        onclick="togglePassword('confirmPassword', 'eyeIconConfirmPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @if ($errors->has('confirm_password'))
                                    <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-0">
                            <button type="submit"
                                class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Lưu</button>
                        </div>
                    </div>

                    <script>
                        function togglePassword(inputId, eyeIconId) {
                            var passwordInput = document.getElementById(inputId);
                            var eyeIcon = document.querySelector('#' + eyeIconId);

                            var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordInput.setAttribute('type', type);

                            // Chuyển đổi biểu tượng con mắt giữa mở và đóng
                            eyeIcon.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' :
                                '<i class="fa-solid fa-eye-slash"></i>';
                        }
                    </script>
                </form>

            </div>
        </div>
        <!-- <div class="card w-100 border-0 p-2"></div> -->
    </div>
@endsection
