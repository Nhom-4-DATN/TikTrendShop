@extends('site.layout.layout')

@section('title', 'Account-information')

@section('content')
    <div class="middle-wrap">
        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                <a href="{{ route('default') }}" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Thông tin chi tiết</h4>
            </div>
            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                <div class="row justify-content-center">
                    <div class="col-lg-4 text-center">
                        <figure class="avatar ms-auto me-auto mb-0 mt-2 w100">
                            @if (isset($users) && is_null($users->image))
                                <img src="{{ asset('/storage/images/account/avatar.jpg') }}" alt="Lỗi" class="shadow-sm rounded-3 w-100">
                            @else
                                <img src="{{ $users->image }}" alt="User Image" class="shadow-sm rounded-3 w-100">
                            @endif
                            {{-- /storage/image/account/65e1bfb1aa3f0_troll.png --}}
                            {{-- <h2 class="fw-700 font-sm text-grey-900 mt-3">{{ $users->image }}</h2> --}}
                        </figure>

                        <h2 class="fw-700 font-sm text-grey-900 mt-3">{{ $users->full_name }}</h2>
                        <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4">id: {{ $users->id }}</h4>

                        <!-- <a href="#" class="p-3 alert-primary text-primary font-xsss fw-500 mt-2 rounded-3">Upload New Photo</a> -->
                    </div>
                </div>

                <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Tài khoản</label>
                                <input type="text" class="form-control" name="user_name" value="{{ $users->user_name }}" autofocus>
                                @if ($errors->has('user_name'))
                                    <p class="text-danger">{{ $errors->first('user_name') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Tạo tài khoản lúc</label>
                                <input type="text" class="form-control" name="created_at" value="{{ $users->created_at }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Họ và tên</label>
                                <input type="text" class="form-control" name="full_name" value="{{ $users->full_name }}">
                                @if ($errors->has('full_name'))
                                    <p class="text-danger">{{ $errors->first('full_name') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" value="{{ $users->phone }}">
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label class="mont-font fw-600 font-xsss">Địa chỉ email</label>
                                <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    {{-- <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Mật khẩu cũ</label>
                                            <input type="password" class="form-control" name="old_password">
                                            @if ($errors->has('old_password'))
                                                <p class="text-danger">{{ $errors->first('old_password') }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Mật khẩu mới</label>
                                            <input type="password" class="form-control" name="new_password">
                                            @if ($errors->has('new_password'))
                                                <p class="text-danger">{{ $errors->first('new_password') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card mt-3 border-0">
                                <div class="card-body d-flex justify-content-between align-items-end p-0">
                                    <div class="form-group mb-0 w-100">
                                        <input type="file" name="file" id="file" class="input-file">
                                        <label for="file" class="rounded-3 text-center bg-white btn-tertiary js-labelFile p-4 w-100 border-dashed">
                                            <i class="ti-cloud-down large-icon me-3 d-block"></i>
                                            <span class="js-fileName">Drag and drop or click to replace</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <button class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block" type="submit">Lưu thay đổi</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- <div class="card w-100 border-0 p-2"></div> -->
    </div>
@endsection
