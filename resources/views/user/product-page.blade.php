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

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img detailPage">
                            <figure>
                                <img src="{{ asset('resources/upload/imageProduct/'.$product['image']) }}" alt="">
{{--                                <div class="p-status">new</div>--}}
                            </figure>
                        </div>
                        @foreach($productImagesDetail as $imageDetail)
                            <div class="product-img detailPage">
                                <figure>
                                    <img src="{{ asset('resources/upload/imageProduct/imageDetail/'.$imageDetail['image']) }}" alt="">
    {{--                                <div class="p-status">new</div>--}}
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>{{$product['name']}}</h2>
                        <div class="pc-meta">
                            <h5>{!! number_format($product['price'],0,",",".") !!} VNĐ</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p>{{ $product['description'] }}</p>
                        <ul class="tags">
                            <li><span>Danh mục sản phẩm :</span> {{ $category['name'] }}</li>
{{--                            <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>--}}
                        </ul>
                        <div class="product-size">
                            @foreach($product_size_quantity as $PSQ)
                                <div id="{{ $PSQ->product_id }}{{ $PSQ->size }}" class="one-size"
                                @if($PSQ->quantity <= 0)
                                    {{ 'hidden' }}
                                    >
                                    <input hidden class="radio-size" type="radio" value="{{ $PSQ->size }}" name="size"

                                        ><label class="label-size">{{ $PSQ->size }}</label>
                                    @else
                                        >
                                        <input hidden class="radio-size" type="radio" value="{{ $PSQ->size }}" name="size"

                                        ><label class="label-size">{{ $PSQ->size }}</label>
                                    @endif
                            </div>
                            @endforeach
{{--                            <div class="one-size">--}}
{{--                                <input class="radio-size" type="radio" value="50" name="size" checked>--}}
{{--                                <label class="label-size">50</label>--}}
{{--                            </div>--}}
{{--                            <div class="one-size">--}}
{{--                                <input class="radio-size" type="radio" value="52" name="size" >--}}
{{--                                <label class="label-size">52</label>--}}
{{--                            </div>--}}
{{--                            <div class="one-size">--}}
{{--                                <input class="radio-size" type="radio" value="54" name="size" >--}}
{{--                                <label class="label-size">54</label>--}}
{{--                            </div>--}}
{{--                            <div class="one-size">--}}
{{--                                <input class="radio-size" type="radio" value="56" name="size" >--}}
{{--                                <label class="label-size">56</label>--}}
{{--                            </div>--}}
                        </div>
                        <br><br><br>
                        <div class="product-quantity">
                            <div class="pro-qty">
                                <input id="quantity" type="text" value="1">
                            </div>
                        </div>
                        <input id="product_id" type="hidden" value="{{ $product['id'] }}">
                        <button id="addToCart" href="#" class="primary-btn pc-btn">Thêm vào giỏ hàng</button>
{{--                        <ul class="p-info">--}}
{{--                            <li>Product Information</li>--}}
{{--                            <li>Reviews</li>--}}
{{--                            <li>Product Care</li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct )
                    @if($relatedProduct['id'] == $product['id'])
                        @continue
                    @endif
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-item">
                            <figure>
                                <a href="{{ route('ProductDetail',$relatedProduct['id']) }}"><img src="{{asset('resources/upload/imageProduct/'.$relatedProduct['image']) }}" alt=""></a>
        {{--                                <div class="p-status">new</div>--}}
                            </figure>
                            <div class="product-text">
                                <h6>{{ $relatedProduct['name'] }}</h6>
                                <p>{!! number_format($relatedProduct['price'],0,",",".") !!} VNĐ</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

@endsection()
