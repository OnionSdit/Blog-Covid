<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<!-- Site Metas -->
<title> @yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

@include('web.shop.layout.style')
@stack('styles')
</head>

<body>

    <div id="wrapper">
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @include('web.shop.layout.header')

        @yield('content')

        {{-- <div class="dmtop">Scroll to Top</div> --}}

        @include('web.shop.layout.footer')

    </div><!-- end wrapper -->

    @include('web.shop.layout.script')
    @stack('scripts')
</body>

</html>
