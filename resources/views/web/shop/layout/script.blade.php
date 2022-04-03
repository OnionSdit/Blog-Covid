    <!-- Js Plugins -->
    <script src="/shop/js/jquery-3.3.1.min.js"></script>
    <script src="/shop/js/bootstrap.min.js"></script>
    <script src="/shop/js/jquery-ui.min.js"></script>
    <script src="/shop/js/jquery.countdown.min.js"></script>
    <script src="/shop/js/jquery.nice-select.min.js"></script>
    <script src="/shop/js/jquery.zoom.min.js"></script>
    <script src="/shop/js/jquery.dd.min.js"></script>
    <script src="/shop/js/jquery.slicknav.js"></script>
    <script src="/shop/js/owl.carousel.min.js"></script>
    <script src="/shop/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    {{-- alertifyjs --}}
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


    <!--  function -->
    <script>
        function AddCart(id) {
            $.ajax({
                url: 'Add-Cart/' + id,
                type: 'GET',
            }).done(function(response) {
                RenderCart(response);
                alertify.success('Đã thêm sản phẩm !');
            });
        }

        $("#change-item-cart").on("click", ".si-close i", function() {
            $.ajax({
                url: 'Delete-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function(response) {
                // console.log(response);
                RenderCart(response);
                alertify.error('Đã xóa sản phẩm !');
            });
        });

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            let s = 0;

            let listQuantity = $('.item-quantity');

            for (i = 0; i < listQuantity.length; i++) {
                s = s + Number(listQuantity[i].innerHTML);
            }

            $("#total-quanty-show").text(s);
        }


    </script>
    <!--End function -->
