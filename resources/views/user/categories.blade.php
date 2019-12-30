@extends('user.master')

@section('content')
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>{{ $category['name'] }}<span>.</span></h2>
                        <a href="{{ asset('home/') }}">Trang chủ</a>
                        @foreach($categories as $key => $cate)
                            <a
                                @if($key == (count($categories) - 1))
                                {{'class=active'}}
                                href="{{ asset('category/'.$cate['id']) }}">{{ $cate['name'] }}</a>
                            @else
                                <a href="{{ asset('category/'.$cate['id']) }}">{{ $cate['name'] }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{ asset('public/user/img/add.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                        <option value="">Sắp xếp</option>
                                        <option value="">Đặt nhiều nhất</option>
                                        <option value="">Mới nhất</option>
                                        <option value="">Giá tốt nhất</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>4 Sản phẩm</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <a href="{{ route('ProductDetail',$product['id']) }}">
                                <figure>
                                    <img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt="">
                                </figure>
                            </a>
                            <div class="product-text">
                                <a href="{{ route('ProductDetail',$product['id']) }}">
                                    <h6 class="text-center">{{ $product['name'] }}</h6>
                                </a>
                                <p class="text-center">{!! number_format($product['price'],0,",",".") !!} VNĐ</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

@endsection()
