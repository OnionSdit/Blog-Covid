@extends('web.shop.layout.master')

@section('title', 'Giỏ hàng')

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .modal-confirm {
            color: #636363;
            width: 325px;
            font-size: 14px;
        }

        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }

        .modal-confirm .modal-header {
            border-bottom: none;
            position: relative;
        }

        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }

        .modal-confirm .form-control,
        .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }

        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
        }

        .modal-confirm .icon-box {
            color: #fff;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #82ce34;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .modal-confirm .icon-box i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }

        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }

        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background: #82ce34;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }

        .modal-confirm .btn:hover,
        .modal-confirm .btn:focus {
            background: #6fb32b;
            outline: none;
        }

    </style>

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Save</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="img100px">
                                @if (Session::has('Cart') != null)
                                    @foreach (Session::get('Cart')->products as $item)
                                        <tr>
                                            <td class="cart-pic first-row"><img
                                                    src="/shop/img/products/{{ $item['productInfo']->img }}" alt=""></td>
                                            <td class="cart-title first-row">
                                                <h5>{{ $item['productInfo']->name }}</h5>
                                            </td>
                                            <td class="p-price first-row">{{ number_format($item['productInfo']->price) }}
                                                đ
                                            </td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input id="quanty-item-{{ $item['productInfo']->id }}" type="text"
                                                            value="{{ $item['quanty'] }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row">{{ number_format($item['price']) }} đ</td>
                                            <td class="close-td first-row"><i
                                                    onclick="saveListItemCart({{ $item['productInfo']->id }});"
                                                    class="ti-save"></i></td>
                                            <td class="close-td first-row"><i class="ti-close"
                                                    onclick="deleteListItemCart({{ $item['productInfo']->id }});"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                @if (Session::has('Cart') != null)
                                    <ul>
                                        <li class="subtotal">Tổng số lượng:
                                            <span>{{ Session::get('Cart')->totalQuanty }} </span>
                                        </li>
                                        <li class="cart-total">Tổng tiền:
                                            <span>{{ number_format(Session::get('Cart')->totalPrice) }} VND</span>
                                        </li>
                                    </ul>
                                    <a class="proceed-btn" href="#myModal" data-toggle="modal">Thanh toán</a>
                                    <div id="myModal" class="modal fade">
                                        <div class="modal-dialog modal-confirm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="icon-box">
                                                        <i class="material-icons">&#xE876;</i>
                                                    </div>
                                                    <h4 class="modal-title w-100">Thanh toán thành công!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center">Cảm ơn bạn đã thanh toán </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/shopping" class="btn btn-success btn-block">Tiếp tục mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function deleteListItemCart(id) {
                $.ajax({
                    url: 'Delete-Item-List-Cart/' + id,
                    type: 'GET',
                }).done(function(response) {
                    RenderListCart(response);
                    alertify.error('Đã xóa khỏi danh sách !');
                });
            }

            function saveListItemCart(id) {

                $.ajax({
                    url: 'save-Item-List-Cart/' + id + '/' + $("#quanty-item-" + id).val(),
                    type: 'GET',
                }).done(function(response) {
                    RenderListCart(response);
                    alertify.success('Cập nhật thành công!');
                });
            }

            function RenderListCart(response) {
                $("#list-cart").empty();
                $("#list-cart").html(response);

                var proQty = $('.pro-qty');
                proQty.prepend('<span class="dec qtybtn">-</span>');
                proQty.append('<span class="inc qtybtn">+</span>');
                proQty.on('click', '.qtybtn', function() {
                    var $button = $(this);
                    var oldValue = $button.parent().find('input').val();
                    if ($button.hasClass('inc')) {
                        var newVal = parseFloat(oldValue) + 1;
                    } else {
                        // Don't allow decrementing below zero
                        if (oldValue > 0) {
                            var newVal = parseFloat(oldValue) - 1;
                        } else {
                            newVal = 0;
                        }
                    }
                    $button.parent().find('input').val(newVal);
                });
            }
        </script>
    </section>
@endsection
