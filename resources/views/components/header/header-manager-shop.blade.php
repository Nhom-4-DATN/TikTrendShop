<header class="shadow-sm position-fixed top-0 start-0 end-0 z-1" style="height: 80px ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary h-100">
        <div class="container-fluid ">
            <a class="navbar-brand fs-4" href="#">
                <span class="fw-bold">TickTrendShop</span> | Kênh Người Bán</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                {{ Auth::user()->full_name }}
                            </button>
                            <div class="dropdown-menu " style="width:250px; left: -100%;">
                                <div class="d-flex justify-content-between align-items-center py-2 px-4 pb-3">
                                    <div class="d-flex  align-items-center justify-content-start ">
                                        <img src="{{ asset(Storage::url('public/' . $store->thumb_url)) }}" class="rounded-full float-start rounded-circle" alt="..." style="width: 40px; height:40px;">
                                        <span class="fs-6 fw-bolder ms-2">{{ $store->name }}</span>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush border-top">
                                    <a href="{{ route('manager.shop-detail', $store->slug) }}" class="py-2 list-group-item list-group-item-action fw-bolder ">
                                        <i class="bi bi-shop fs-4 "></i>
                                        <span class="ms-2 fs-6 ">Hồ sơ cửa hàng</span>
                                    </a>
                                    <a href="{{ route('shop.logout') }}" class="list-group-item list-group-item-action  fw-bolder py-2">
                                        <i class="bi bi-box-arrow-right fs-4 "></i>
                                        <span class="ms-2 fs-6 ">Đang xuất</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
