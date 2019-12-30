@extends('user.master')

@section('content')
    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Chi tiết đơn hàng<span>.</span></h2>
                    </div>
                </div>
{{--                                <div class="col-lg-8">--}}
{{--                                    <img src="public/user/img/add.jpg" alt="">--}}
{{--                                </div>--}}
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
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($deal_detail as $key => $product)
                            <tr>
                                <td class="product-col">
                                    <img src="{{ asset('resources/upload/imageProduct/'.$product->image) }}" alt="">
                                    <div class="p-title">
                                        <h5>{{ $product->name }}</h5>
                                    </div>
                                </td>
                                <td class="size-col">{{ $product->size }}</td>
                                <td class="price-col">{{ number_format($product->price,0,",",".") }} VNĐ</td>
                                <td class="quantity-col" style="padding-left: 30px;">
                                    {{ $product->quantity }}
                                </td>
                                <?php $total = $product->quantity * $product->price; ?>
                                <td class="total">{{ number_format($total,0,",",".") }} VNĐ</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

@endsection()
