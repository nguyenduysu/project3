@extends('user.master')

@section('content')
    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{ asset('public/user/img/slider-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('public/user/img/slider-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="{{ asset('public/user/img/slider-3.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{ asset('public/user/img/icons/f-delivery.png') }}" alt="">
                            <h4>Miễn phí ship</h4>
                            <p>Miễn phí ship cho hóa đơn trên 2 triệu đồng và hóa đơn nội thành Hà Nội. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{ asset('public/user/img/icons/coin.png') }}" alt="">
                            <h4>Hoàn tiền 110% </h4>
                            <p>Hoàn tiền 110% khi quý khách phát hiện hàng giả mua tại S - Shop. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{ asset('public/user/img/icons/chat.png') }}" alt="">
                            <h4>Hỗ trợ giải đáp nhanh chóng</h4>
                            <p>Đội ngũ chăm sóc khách hàng luôn sẵn lòng phục vụ quý khách. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="{{ asset('public/user/img/f-box-1.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="{{ asset('public/user/img/f-box-2.jpg') }}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="{{ asset('public/user/img/f-box-3.jpg') }}" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Sản phẩm mới</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">Tất cả</li>
                            <li data-filter=".vest-cong-so">Vest công sở</li>
                            <li data-filter=".vest-cuoi">Vest cưới</li>
                            <li data-filter=".ao-len">Áo len</li>
                            <li data-filter=".ao-da">Áo da</li>
                            <li data-filter=".ao-so-mi">Áo sơ mi</li>
                            <li data-filter=".quan-au">Quần âu</li>
                            <li data-filter=".giay-da">Giầy da</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <div class="row mix all vest-cong-so">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Vest Công Sở</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 2)
                        <div class="col-lg-3 col-sm-6 vest-cs">
                            <div class="single-product-item">
                                <figure>
                                    <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                    {{--                                <div class="p-status">new</div>--}}
                                </figure>
                                <div class="product-text">
                                    <h6>{!! $product['name'] !!}</h6>
                                    <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all vest-cuoi">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Vest Cưới</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 3)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all ao-len">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Áo Len</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 5)
                            <div class="col-lg-3 col-sm-6 ao-len">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all ao-da">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Áo Da</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 6)
                            <div class="col-lg-3 col-sm-6 ao-da">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all ao-so-mi">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Áo Sơ Mi</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 7)
                            <div class="col-lg-3 col-sm-6 ao-so-mi">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all quan-au">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Quần âu</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 9)
                            <div class="col-lg-3 col-sm-6 quan-au">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row mix all giay-da">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 align="center">Giày Da</h3>
                    </div>
                    @foreach($products as $product)
                        @if($product['cate_id'] == 11)
                            <div class="col-lg-3 col-sm-6 giay-da">
                                <div class="single-product-item">
                                    <figure>
                                        <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>
                                        {{--                                <div class="p-status">new</div>--}}
                                    </figure>
                                    <div class="product-text">
                                        <h6>{!! $product['name'] !!}</h6>
                                        <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
{{--                @foreach($products as $product)--}}
{{--                    <div class="col-lg-3 col-sm-6 mix all dresses bags">--}}
{{--                        <div class="single-product-item">--}}
{{--                            <figure>--}}
{{--                                <a href="{{ route('ProductDetail',$product['id']) }}"><img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt=""></a>--}}
{{--                                <div class="p-status">new</div>--}}
{{--                            </figure>--}}
{{--                            <div class="product-text">--}}
{{--                                <h6>{!! $product['name'] !!}</h6>--}}
{{--                                <p>{{ number_format($product['price'],0,",",".") }} VNĐ</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h3>Tin tức <br />TIẾN LINH ĐIỂN TRAI HÚT HỒN FAN NỮ KHI DIỆN SUIT</h3>
                        </div>
                        <p>Mới đây, Tiến Linh đã có màn thay đổi ngoạn mục về phong cách
                           khi tạm trút bỏ bộ quần đùi áo số sau chiến thắng vang dội tại Seagame,
                           khi diện lên mình những bộ Suit cao cấp. </p>
                        <a href="#" class="primary-btn look-btn">Xem chi tiết</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="public/user/img/news/tienlinh.png" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="public/user/img/logos/logo-1.png" alt="">
            </div>
            <div class="logo-item">
                <img src="public/user/img/logos/logo-2.png" alt="">
            </div>
            <div class="logo-item">
                <img src="public/user/img/logos/logo-3.png" alt="">
            </div>
            <div class="logo-item">
                <img src="public/user/img/logos/logo-4.png" alt="">
            </div>
            <div class="logo-item">
                <img src="public/user/img/logos/logo-5.png" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->
@endsection()
