@extends('user.master')

@section('content')
    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Đơn hàng<span>.</span></h2>
                    </div>
                </div>
{{--                <div class="col-lg-8">--}}
{{--                    <img src="public/user/img/add.jpg" alt="">--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Địa chỉ nhận hàng
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Giá đơn hàng
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Ngày đặt hàng
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Chi tiết đơn hàng
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr></div>
            </div>
            <div class="row">
                @foreach($deals as $deal)
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <p>{{ $deal->name }}</p>
                        <p>{{ $deal->street }}</p>
                        <p>{{ $deal->district }}</p>
                        <p>{{ $deal->city }}</p>
                        <p>{{ $deal->phone }}</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <p>{{ number_format($deal->totalPrice,0,",",".") }} VNĐ</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <p>{{ $deal->created_at }}</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <a class="deal-detail" href="{{ route('dealDetail', $deal->id) }}">Chi tiết</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

@endsection()
