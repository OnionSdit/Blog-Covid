@extends('web.shop.layout.master')

@section('title', 'Dụng cụ y tế Covid-19')

@section('content')

    <div class="breacrumb-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @foreach ($products as $prd)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img id="imagePrd" src="/shop/img/products/{{ $prd->img }}" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a onclick="AddCart({{ $prd->id }})"
                                                        href="javascript:">+ Thêm vào giỏ hàng</a></li>
                                                <li hidden class="w-icon"><a href="#"><i class="fa fa-random"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            {{-- <div class="catagory-name">Towel</div> --}}
                                            <h5>{{ $prd->name }}</h5>
                                            <div class="product-price">
                                                {{ number_format($prd->price) }} đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/shop/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/shop/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/shop/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/shop/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/shop/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
