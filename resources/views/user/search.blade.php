@extends('user.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <br>
                    <h2>Kết quả tìm kiếm</h2>
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product )
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="{{ route('ProductDetail',$product->id) }}"><img src="{{asset('resources/upload/imageProduct/'.$product->image) }}" alt=""></a>
                            {{--                                <div class="p-status">new</div>--}}
                        </figure>
                        <div class="product-text">
                            <h6>{{ $product->name }}</h6>
                            <p>{!! number_format($product->price,0,",",".") !!} VNĐ</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="div" style="transform: translateX(50%); margin-right: 40%">
                    {{ $products->links() }}
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        </div>
    </div>

@endsection()
