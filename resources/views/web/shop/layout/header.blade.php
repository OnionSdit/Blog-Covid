    <!-- Header Section Begin -->
    <style>
        #change-item-cart table tbody tr td img {
            width: 70px;
        }

    </style>

    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        shopping@namnayratruong.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +84 11.22.333
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Xin chào
                    </a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="/shop/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="/shop/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo" style="background: #00b4e5;padding: 12px;">
                            <a href="/shopping">
                                <img src="/shop/img/logo.png" alt="" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    @if (Session::has('Cart') != null)
                                        <span id="total-quanty-show">{{ Session::get('Cart')->totalQuanty }}</span>
                                    @else
                                        <span id="total-quanty-show">0</span>
                                    @endif

                                </a>
                                <div class="cart-hover">
                                    <div id="change-item-cart">
                                        @if (Session::has('Cart') != null)
                                            <div class="select-items">
                                                <table>
                                                    <tbody>
                                                        @foreach (Session::get('Cart')->products as $item)
                                                            <tr>
                                                                <td class="si-pic"><img
                                                                        src="/shop/img/products/{{ $item['productInfo']->img }}"
                                                                        alt=""></td>
                                                                <td class="si-text">
                                                                    <div class="product-selected">
                                                                        <p>{{ number_format($item['productInfo']->price) }}
                                                                            đ x <span
                                                                                class="item-quantity">{{ $item['quanty'] }}</span>
                                                                        </p>

                                                                        <h6><b>{{ $item['productInfo']->name }}</b>
                                                                        </h6>
                                                                    </div>
                                                                </td>
                                                                <td class="si-close">
                                                                    <i class="ti-close"
                                                                        data-id="{{ $item['productInfo']->id }}"></i>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="select-total">
                                                <span>total:</span>
                                                <h5>{{ number_format(Session::get('Cart')->totalPrice) }} đ</h5>
                                                <input hidden id="total-quanty-cart" type="number"
                                                    value="{{ Session::get('Cart')->totalQuanty }}">
                                            </div>

                                        @endif

                                    </div>
                                    <div class="select-button">
                                        <a href="list-cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/shopping">Shop</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="/">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
