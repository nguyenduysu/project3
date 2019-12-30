<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>S - Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/user/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/user/css/style.css') }}" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form action="{{ route('search') }}" class="search-model-form">
                <input type="text" id="search-input" name="search" placeholder="Tìm kiếm tại đây.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('public/user/img/logo.png') }}" alt=""></a>
                </div>
{{--                <div class="header-right">--}}
{{--                    <img src="{{ asset('public/user/img/icons/search.png') }}" alt="" class="search-trigger">--}}
{{--                    <img src="{{ asset('public/user/img/icons/man.png') }}" alt="">--}}

{{--                    <a href="{{ route('cart') }}">--}}
{{--                        <img src="{{ asset('public/user/img/icons/bag.png') }}" alt="">--}}
{{--                        <span class="show-quantity-cart">{{ $totalCart }}</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="user-access">--}}
{{--                    <a href="{{ route('register') }}">Register</a>--}}
{{--                    <a href="{{ route('getLogin') }}" class="in">Sign in</a>--}}
{{--                </div>--}}
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="#">Danh mục sản phẩm</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('category',$category['id']) }}">{{ $category['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
{{--                        <li><a href="./product-page.html">About</a></li>--}}
                        <li><a href="check-out.blade.php">Tin Tức</a></li>
{{--                        <li><a href="./contact.html">Contact</a></li>--}}
                        <li>
                            <a href="{{ route('register') }}">Đăng kí/</a>
                            <a href="{{ route('getLogin') }}" class="in">Đăng nhập</a>
                        </li>
                        <li></li>
                        <li> <img src="{{ asset('public/user/img/icons/search.png') }}" alt="" class="search-trigger"></li>
                        <li><img src="{{ asset('public/user/img/icons/man.png') }}" alt="">
                            <ul class="sub-menu">
                                @if(Auth::user())
                                    <li><a href="{{ route('getEditInfoCustomer', Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i>{!! Auth::user()->username !!}</a>
                                    <li><a href="{{ route('allDealOfUser', Auth::user()->id) }}"><i class="fa fa-shopping-cart"></i> Đơn hàng</a></li>
                                    <li><a href="{!! URL::route('logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a class="a-cart" href="{{ route('cart') }}">
                                <img src="{{ asset('public/user/img/icons/bag.png') }}" alt="">
                                <span class="show-quantity-cart">{{ $totalCart }}</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
{{--            @include('admin.blocks.message')--}}
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="{{ asset('public/user/img/icons/delivery.png') }}" alt="">
                        <p>Miễn phí ship hàng nội thành Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="{{ asset('public/user/img/icons/voucher.png') }}" alt="">
                        <p>Khuyễn mãi 20% chào đón Tết 2020</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                        <img src="{{ asset('public/user/img/icons/sales.png') }}" alt="">
                        <p>Khuyến mãi 10% thanh toán qua VN-Pay</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    @yield('content');

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>S - Shop</h4>
                            <ul>
                                <li><i class="fa fa-phone"></i> Số điện thoai: 0962.302.616</li>
                                <li><i class="fa fa-envelope"></i> Mail: su.nguyenduy.nb@gamil.com</li>
                                <li><i class="fa fa-address-book"></i> Địa chỉ: Số 1 Đại Cồ Việt - Quận Hai Bà Trưng - Hà Nội</li>
                            </ul>
                        </div>
                    </div>
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="single-footer-widget">--}}
{{--                            <h4>Customer Care</h4>--}}
{{--                            <ul>--}}
{{--                                <li>Search</li>--}}
{{--                                <li>Privacy Policy</li>--}}
{{--                                <li>2019 Lookbook</li>--}}
{{--                                <li>Shipping & Delivery</li>--}}
{{--                                <li>Gallery</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Dịch vụ của chúng tôi</h4>
                            <ul>
                                <li>Miễn phí ship nội thành Hà Nội</li>
                                <li>Đổi trả miễn phí</li>
                                <li>Chăm sóc hàng hiệu</li>
                            </ul>
                        </div>
                    </div>
{{--                    <div class="col-lg-4 col-sm-6">--}}
{{--                        <div class="single-footer-widget">--}}
{{--                            <h4>Information</h4>--}}
{{--                            <ul>--}}
{{--                                <li>Payment methods</li>--}}
{{--                                <li>Times and shipping costs</li>--}}
{{--                                <li>Product Returns</li>--}}
{{--                                <li>Shipping methods</li>--}}
{{--                                <li>Conformity of the products</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                    <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                    <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
                </div>
            </div>

            <div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="icon-heart color-danger"
                                                                        aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('public/user/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/user/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('public/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/user/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('public/user/js/main.js') }}"></script>
    <script src="{{ asset('public/user/js/script.js') }}"></script>
{{--    <script src="{{ asset('public/admin/js/myscript.js') }}" type="text/javascript" charset="utf-8" async defer></script>--}}
</body>

</html>
