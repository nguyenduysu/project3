@extends('user.master')

@section('content')
<!-- Page Add Section Begin -->
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Mua hàng<span>.</span></h2>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="public/user/img/add.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Cart Total Page Begin -->
<section class="cart-total-page spad">
    <div class="container">
        <form action="{{ route('postCheckOut') }}" method="POST" class="checkout-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Thông tin người mua</h3>
                    @include('admin.blocks.message')
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Tên*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="name" type="text" placeholder="Tên người mua" value="{!! old('name') !!}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Địa chỉ nhận hàng*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="street" type="text" value="{!! old('street') !!}">
{{--                            <input type="text">--}}
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-2">--}}
{{--                            <p class="in-name">Country*</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-10">--}}
{{--                            <select class="cart-select country-usa">--}}
{{--                                <option>USA</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Quận/Huyện*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="district" type="text" value="{!! old('district') !!}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Tỉnh/Thành phố*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="city" type="text" value="{!! old('city') !!}">
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-2">--}}
{{--                            <p class="in-name">Post Code/ZIP*</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-10">--}}
{{--                            <input type="text">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Số điện thoại*</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="phone" type="text" value="{!! old('phone') !!}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Email</p>
                        </div>
                        <div class="col-lg-10">
                            <input name="email" type="text" value="{!! old('email') !!}">
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 text-right">--}}
{{--                            <div class="diff-addr">--}}
{{--                                <input type="radio" id="one">--}}
{{--                                <label for="one">Ship to different address</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-3">
                    <div class="order-table">
                        <h4 class="text-center">Cart Infor</h4><br>
{{--                        <div class="cart-item">--}}
{{--                            <span>Product</span>--}}
{{--                            <p class="product-name">Blue Dotted Shirt</p>--}}
{{--                        </div>--}}
                        <div class="cart-item">
                            <span>Quantity</span>
                            <p>{{ $totalCart }}</p>
                        </div>
                        <div class="cart-item">
                            <span>Total Price</span>
                            <p>{{ number_format($priceCart,0, ',', '.') }} VNĐ</p>
                        </div>
                        <div class="cart-item">
                            <span>Shipping</span>
                            <p>{{ number_format(30000,0, ',', '.')}} VNĐ</p>
                        </div>
                        <div class="cart-total">
                            <span>Total</span>
                            <p>{{ number_format($priceCart + 30000,0, ',', '.') }} VNĐ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-method">
                        <h3>Phương thức thanh toán</h3>
                        <ul>
                            <li>Paypal <img src="public/user/img/paypal.jpg" alt=""></li>
                            <li>Credit / Debit card <img src="public/user/img/mastercard.jpg" alt=""></li>
                            <li>
                                <label for="two" class="active">Thanh toán khi nhận hàng</label>
                                <input name="payment" type="radio" id="two" value="0">
                            </li>
                        </ul>
                        <button type="submit">Mua hàng</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Cart Total Page End -->

@endsection()
