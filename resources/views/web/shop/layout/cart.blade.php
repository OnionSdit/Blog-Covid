@if (Session::has("Cart") != null)
        <div class="select-items">
            <table>
                <tbody>
                    @foreach (Session::get('Cart')->products as $item)
                        <tr>
                            <td class="si-pic"><img src="/shop/img/products/{{ $item['productInfo']->img }}"
                                    alt="" ></td>
                            <td class="si-text">
                                <div class="product-selected">
                                    <p>{{ number_format($item['productInfo']->price) }} đ x <span class="item-quantity">{{ $item['quanty'] }}</span> </p>
                                    <h6><b>{{$item['productInfo']->name }}</b></h6>
                                </div>
                            </td>
                            <td class="si-close">
                                <i class="ti-close" data-id="{{$item['productInfo']->id}}"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>total:</span>
            <h5>{{ number_format(Session::get('Cart')->totalPrice) }} đ</h5>
        </div>


@endif
