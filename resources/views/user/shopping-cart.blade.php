@extends('user.master')

@section('content')
    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Giỏ hàng<span>.</span></h2>
{{--                        <a href="#">Home</a>--}}
{{--                        <a href="#">Dresses</a>--}}
{{--                        <a class="active" href="#">Night Dresses</a>--}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="public/user/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Sản phẩm</th>
                            <th>Kích cỡ</th>
                            <th>Giá</th>
                            <th class="quan">Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cart))
                            <?php $totalPrice = 0; ?>
                            @foreach($cart as $id => $product)
                                @foreach($product as $size => $detail)
                                    <tr id="{{ $id.$size }}">
                                        <td class="product-col">
                                            <img src="{{ asset('resources/upload/imageProduct/'.$detail['image']) }}" alt="">
                                            <div class="p-title">
                                                <h5>{{ $detail['name'] }}</h5>
                                            </div>
                                        </td>
                                        <td class="size-col">{{ $size }}</td>
                                        <td class="price-col">{{ number_format($detail['price'],0,",",".") }} VNĐ</td>
                                        <td class="quantity-col">
                                            <div class="pro-qty change-quantity-in-cart">
                                                <input class="quantity-product" type="text" value="{{ $detail['quantity'] }}">
                                            </div>
                                        </td>
                                        <?php $total = $detail['quantity'] * $detail['price']; ?>
                                        <?php $totalPrice += $total ?>
                                        <td id="total-{{$id.$size}}" class="total">{{ number_format($total,0,",",".") }} VNĐ</td>
                                        <td hidden>{{ $id }}</td>
                                        <td hidden>{{ $size }}</td>
                                        <td class="product-close">X</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @else
                            <h4 class="notification-nothing-product">Không có sản phẩm trong giỏ hàng của bạn.</h4>
                        @endif
                    </tbody>
                </table>
            </div>
            @if(isset($cart))
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
{{--                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>--}}
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="total-shopping-cart-page">Tổng tiền</div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="total-price-shopping-cart-page" id="total-price-shopping-cart-page">{{ number_format($totalPrice,0,",",".") }} VNĐ</div>
                    </div>
                </div>
            @endif
{{--            <div class="cart-btn">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="coupon-input">--}}
{{--                            <input type="text" placeholder="Enter cupone code">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5 offset-lg-1 text-left text-lg-right">--}}
{{--                        <div class="site-btn clear-btn">Clear Cart</div>--}}
{{--                        <div class="site-btn update-btn">Update Cart</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shipping-info">
                            <h5>Chọn chế độ giao hàng</h5>
                            <div class="chose-shipping">
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="one">
                                    <label for="one" class="active">
                                        Giao hàng miễn phí theo tiêu chuẩn
                                        <span>Áp dụng cho nội thành Hà Nội</span>
                                    </label>
                                </div>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="two">
                                    <label for="two">
                                        Giao hàng nhanh - 80.000 VNĐ
                                    </label>
                                </div>
                                <div class="cs-item last">
                                    <input type="radio" name="cs" id="three">
                                    <label for="three">
                                        Lấy hàng tại shop
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="total-info">
{{--                            <div class="total-table">--}}
{{--                                <table>--}}
{{--                                    <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>Total</th>--}}
{{--                                            <th>Subtotal</th>--}}
{{--                                            <th>Shipping</th>--}}
{{--                                            <th class="total-cart">Total Cart</th>--}}
{{--                                        </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td class="total">$29</td>--}}
{{--                                            <td class="sub-total">$29</td>--}}
{{--                                            <td class="shipping">$10</td>--}}
{{--                                            <td class="total-cart-p">$39</td>--}}
{{--                                        </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="{{ route('getCheckOut') }}" class="primary-btn chechout-btn">Mua hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

@endsection()
