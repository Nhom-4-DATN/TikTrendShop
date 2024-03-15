@extends('site.layout.layout')

@section('title', 'Chi tiết sản phẩm: ' . $product->name)

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
    </head>

    <div class="row">
        <div class="col-xl-12 mt-3">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 mb-4">
                    <div class="product-slider-3 owl-carousel owl-theme dot-none owl-nav-link edge-link">
                        <div class="owl-items pt-lg--10 pb-lg--10 bg-white rounded-3"><img data-thumb="<img src='../images/pl7.png' />" src="../images/pl7.png" alt="icon"></div>
                        <div class="owl-items pt-lg--10 pb-lg--10 bg-white rounded-3"><img data-thumb="<img src='../images/pl8.png' />" src="../images/pl8.png" alt="icon"></div>
                        <div class="owl-items pt-lg--10 pb-lg--10 bg-white rounded-3"><img data-thumb="<img src='../images/pl9.png' />" src="../images/pl9.png" alt="icon"></div>
                        <div class="owl-items pt-lg--10 pb-lg--10 bg-white rounded-3"><img data-thumb="<img src='../images/pl6.png' />" src="../images/pl6.png" alt="icon"></div>
                    </div>
                    <div class="d-flex">
                        <div class="border border-primary detail">
                            Mặc định
                        </div>
                        @foreach ($product_variations as $item)
                            @if ($product->id_product == $item->id_product)
                                <div class="border border-primary detail">
                                    <img src="../images/{{ $item->image }}" alt="">
                                    <div class="d-flex justify-content-center">
                                        {{ $item->name }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6  col-md-12 pad-top-lg-200 pad-bottom-lg-100 pad-top-100 pad-bottom-75 ps-md--5">
                    {{-- <h4 class="text-danger font-xssss fw-700 ls-2">DNMX</h4> --}}
                    <h2 class="fw-700 text-grey-900 display1-size lh-3 porduct-title display2-md-size">
                        {{ $product->name }}</h2>
                    <div class="star d-block w-100 text-left">
                        <img src="../images/star.png" alt="star" class="w15 float-left">
                        <img src="../images/star.png" alt="star" class="w15 float-left">
                        <img src="../images/star.png" alt="star" class="w15 float-left">
                        <img src="../images/star.png" alt="star" class="w15 float-left">
                        <img src="../images/star-disable.png" alt="star" class="w15 float-left me-2">
                    </div>
                    <p class="review-link font-xssss fw-500 text-grey-500 lh-3"> 2 customer review</p>
                    <div class="clearfix"></div>
                    {{-- <p class="font-xsss fw-400 text-grey-500 lh-30 pe-5 mt-3 me-5">ultrices justo eget,
                        sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus
                        scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p> --}}

                    <h6 class="display2-size fw-700 text-current ls-2 mb-2">
                        <span class="font-xl">$</span>449
                        <span class="font-xs text-grey-500" style="text-decoration: line-through;">$699</span>
                    </h6>
                    {{-- <div class="timer bg-white mt-2 mb-0 w350 rounded-3">
                        <div class="time-count"><span class="text-time">00</span> <span class="text-day">Day</span></div>
                        <div class="time-count"><span class="text-time">10</span> <span class="text-day">Hours</span> </div>
                        <div class="time-count"><span class="text-time">49</span> <span class="text-day">Min</span> </div>
                        <div class="time-count"><span class="text-time">11</span> <span class="text-day">Sec</span> </div>
                    </div> --}}
                    <div class="clearfix"></div>
                    <form action="#" class="form--action mt-4 mb-3">
                        <div class="product-action flex-row align-items-center">
                            <div class="quantity me-3">
                                <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                <div class="dec qtybutton">-</div>
                                <div class="inc qtybutton">+</div>
                            </div>

                            <a href="#" class="add-to-cart bg-dark text-white fw-700 ps-lg-5 pe-lg-5 text-uppercase font-xssss float-left border-dark border rounded-3 border-size-md d-inline-block mt-0 p-3 text-center ls-3">Add
                                to cart</a>
                            <a href="#" class="btn-round-xl alert-dark text-white d-inline-block mt-0 ms-4 float-left"><i class="ti-heart font-sm"></i></a>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <ul class="product-feature-list mt-5">
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900"> Category
                                : </b>Furniture</li>
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Straight fit
                        </li>
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900">SKU : </b>
                            REF. LA-107</li>
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Dry clean</li>
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900">Tags :
                            </b>Design, Toys</li>
                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left">Cutton shirt
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Trong file blade của trang sản phẩm -->
        @if (Auth::check())
            <form
                action="{{ route('product.comment', ['id_product' => $product->id, 'name_product' => urlencode($product->name)]) }}"
                method="POST">
                @csrf
                <div class="form-group">
                    <label for="content">Comment:</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <p>Vui lòng đăng nhập để thêm comment.</p>
        @endif
        <div class="comment">
            @php
                $count = 0;
            @endphp

            @foreach ($comments as $item)
                @if ($item->id_product == $product->id)
                    @php
                        $count++;
                    @endphp
                    <p>Người dùng {{ $item->id_user }}: {{ $item->content }} {{ $item->created_at->format('d/m/Y') }}
                    </p>
                @endif
            @endforeach

            @if ($count == 0)
                <p>Không có bình luận</p>
            @endif
        </div>
    </div>

    <script src="../js/plugin-1.js"></script>

    <script src="../js/countdown.js"></script>
    <script src="../js/scripts-1.js"></script>

    <script src="../owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.product-slider-3');
            owl.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                items: 1,
                center: true,
                nav: true,
                thumbs: true,
                thumbImage: false,
                thumbsPrerendered: true,
                thumbContainerClass: 'owl-thumbs',
                thumbItemClass: 'owl-thumb-item',
                navText: ["<i class='ti-angle-left icon-nav'></i>",
                    "<i class='ti-angle-right icon-nav'></i>"
                ],
            });
        });
    </script>

    <script>
        $(function() {

            $('.timer').countdown('2021/6/31', function(event) {
                var $this = $(this).html(event.strftime(''
                    // + '<span>%w</span> weeks '
                    +
                    '<div class="time-count"><span class="text-time">%d</span> <span class="text-day">Day</span></div> ' +
                    '<div class="time-count"><span class="text-time">%H</span> <span class="text-day">Hours</span> </div> ' +
                    '<div class="time-count"><span class="text-time">%M</span> <span class="text-day">Min</span> </div> ' +
                    '<div class="time-count"><span class="text-time">%S</span> <span class="text-day">Sec</span> </div> '
                ));
            });
        });

        // Lấy tất cả các phần tử có class image-container
        var imageContainers = document.querySelectorAll(".details");

        // Duyệt qua từng phần tử và thêm sự kiện click
        imageContainers.forEach(function(container) {
            container.addEventListener("click", function() {
                // Xóa lớp clicked của tất cả các phần tử image-container
                imageContainers.forEach(function(container) {
                    container.classList.remove("clicked");
                });

                // Thêm lớp clicked cho phần tử được click
                this.classList.add("clicked");
            });
        });
    </script>

@endsection
