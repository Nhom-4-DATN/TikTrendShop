@extends('layouts.manager-stores')
@section('content')
    <div class="card border-0 shadow-sm ">
        <div class="card-header bg-white pt-4 px-4 border-0">
            <h4 class="fs-4 fw-bold mb-0">Hồ sở shop</h4>
        </div>
        <div class="card-body bg-white pb-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Thông tin cơ bản</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="w-75 mx-auto mt-5">
                        <x-form.index :class="'mt-4'" :action="Route('manager.update.shop', $store->slug)" :method="'PUT'" :enctype="'multipart/form-data'">
                            <div class="row">
                                <div class="col-4">
                                    <div class="rounded-1 overflow-hidden border">
                                        <div class="w-100  position-relative overflow-hidden " style="height: 150px; ">
                                            <div class="position-absolute background-image_banner_shop top-0 start-0 end-0 bottom-0 bg-opacity-50 background"
                                                style="background-image: url(https://photographylife.com/wp-content/uploads/2018/11/Moeraki-Boulders-New-Zealand.jpg);
                                            ">
                                            </div>
                                            <div class="position-absolute top-50 start-50 d-flex align-items-center " style="transform: translate(-50%, -50%); width: max-content;">
                                                <div class="  rounded-circle overflow-hidden " style="max-width: 60px; height:60px; ">
                                                    <x-form.input-image :src="asset(Storage::url('public/' . $store->thumb_url)) ?? asset('images/default/shop.jpeg')" :name="'thumb_image'" />
                                                </div>
                                                <div class="ms-2">
                                                    <h3 class="fs-5 fw-bold text-light ">{{ $store->name }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-item-light rounded-0 list-group-flush">
                                            <li class="list-group-item">Tống sản Phẩm </li>
                                            <li class="list-group-item">tổng người theo dổi </li>
                                            <li class="list-group-item">Đã tham gia: {{ $store->created_at->format('Y-m-d') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <x-form.input :id="'name-shop'" :name="'name_shop'" :lable="'Tên cửa hàng'" :value="$store->name" />
                                    </div>
                                    <div class="mt-4">
                                        <x-form.input :id="'font_number'" :name="'phone_number'" :lable="'Số điện thoại'" :value="$store->phone" />
                                    </div>
                                    <div class="mt-4 ">
                                        <x-form.select-provinces :data="$store->address ?? ''" />
                                    </div>
                                    <div class="mt-4 ">
                                        <x-form.textarea :id="'name-shop'" :name="'description'" :lable="'Mô tả cửa hàng'" :style="'height:150px'" :value="$store->description" />
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Lưu Thông tin</button>
                                </div>t
                            </div>
                        </x-form.index>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="nav-payment-tab" tabindex="0">
                </div>
            </div>
        </div>
    </div>
@endsection
