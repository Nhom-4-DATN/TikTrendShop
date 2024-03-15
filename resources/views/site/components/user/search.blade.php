@extends('site.layout.layout')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="card p-md-5 p-4 bg-primary-gradiant rounded-3 shadow-xss bg-pattern border-0 overflow-hidden">
                        <div class="bg-pattern-div"></div>
                        <h2 class="display1-size display2-md-size fw-700 text-white mb-0 mt-0">Kết quả tìm kiếm cho
                            "{{ $keyword }}"
                            {{-- <span class="fw-700 ls-3 text-grey-200 font-xsssss mt-2 d-block">Top products</span> --}}
                        </h2>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <h4 class="float-left font-xssss fw-700 text-grey-500 text-uppercase ls-3 mt-2 pt-1">Tìm thấy
                        <span class="fw-700 text-grey-900">{{ $totalProducts }}</span> sản phẩm:
                    </h4>
                    <select class="searchCat float-right sort">
                        <option value="">Default Sorting</option>
                        <option value="151781441596 ">Fashion</option>
                        <option value="139119624252 ">- Men</option>
                        <option value="139118313532 ">- Women</option>
                        <option value="139360141372 ">Electronics</option>
                        <option value="152401903676 ">Home &amp; Garden</option>
                        <option value="138866720828 ">- Decor</option>
                        <option value="138866917436 ">- Lighting</option>
                    </select>
                </div>

                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="card w-100 border-0 mt-4">
                            <div class="card-image w-100 p-0 text-center bg-greylight rounded-3 mb-2">
                                <a
                                    href="{{ route('productDetails', ['id' => $product->id, 'name_product' => urlencode($product->name)]) }}"><img
                                        src="../images/pp-9.png" alt="product-image" class="w-100 mt-0 mb-0 p-5"></a>
                            </div>
                            <div class="card-body w-100 p-0 text-center">
                                <h2 class="mt-2 mb-1"><a href="../single-product.html"
                                        class="text-black fw-700 font-xsss lh-26">{{ $product->name }}</a></h2>
                                <h6 class="font-xsss fw-600 text-grey-500 ls-2">
                                    Giá tốt nhất:
                                    @php
                                        // Khởi tạo giá trị nhỏ nhất ban đầu bằng một giá trị lớn
                                        $minPrice = PHP_INT_MAX;
                                    @endphp

                                    @foreach ($product_variations as $variation)
                                        {{-- Kiểm tra nếu biến thể sản phẩm thuộc về sản phẩm hiện tại --}}
                                        @if ($variation->id_product == $product->id)
                                            {{-- So sánh giá trị của biến thể sản phẩm với giá trị nhỏ nhất hiện tại --}}
                                            @php
                                                $priceToDisplay =
                                                    $variation->price >= $variation->sale_price
                                                        ? $variation->sale_price
                                                        : $variation->price;
                                                $minPrice = min($minPrice, $priceToDisplay); // Cập nhật giá trị nhỏ nhất
                                            @endphp
                                        @endif
                                    @endforeach

                                    {{-- Hiển thị giá trị nhỏ nhất --}}
                                    <span class="text-red">{{ number_format($minPrice, 0, ',', '.') }} VNĐ</span>

                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>

                {{-- <div class="col-lg-12 mt-3 mb-5 text-center"><a href="#"
                        class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Load
                        More</a></div> --}}
            </div>
        </div>
    </div>
@endsection
