@extends('web.layout.master')

@section('content')
    <section class="section wb mt-5">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            .send-button {
                background: #54C7C3;
                width: 100%;
                font-weight: 600;
                color: #fff;
                padding: 8px 25px;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .g-button {
                color: #fff !important;
                border: 1px solid #EA4335;
                background: #ea4335 !important;
                width: 100%;
                font-weight: 600;
                color: #fff;
                padding: 8px 25px;
            }

            .my-input {
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                cursor: text;
                padding: 8px 10px;
                transition: border .1s linear;
            }

            .header-title {
                margin: 5rem 0;
            }

            h1 {
                font-size: 31px;
                line-height: 40px;
                font-weight: 600;
                color: #4c5357;
            }

            h2 {
                color: #5e8396;
                font-size: 21px;
                line-height: 32px;
                font-weight: 400;
            }

            .login-or {
                position: relative;
                color: #aaa;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .span-or {
                display: block;
                position: absolute;
                left: 50%;
                top: -2px;
                margin-left: -25px;
                background-color: #fff;
                width: 50px;
                text-align: center;
            }

            .hr-or {
                height: 1px;
                margin-top: 0px !important;
                margin-bottom: 0px !important;
            }

            @media screen and (max-width:480px) {
                h1 {
                    font-size: 26px;
                }

                h2 {
                    font-size: 20px;
                }
            }

        </style>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <body>
            <div class="container">
                <div class="col-md-6 mx-auto text-center"  style="margin: -40px">
                    <div class="header-title">
                        <h1 class="wv-heading--title">
                            ????NG K?? T??I KHO???N
                        </h1>
                        <h2 class="wv-heading--subtitle">
                            Nhanh ch??ng v?? d??? d??ng.
                        </h2>
                        @if (session('error'))
                        <div class="col-lg-12">
                            <div class="alert alert-danger"> {{ session('error') }} </div>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="col-lg-12">
                            <div class="alert alert-success"> {{ session('success') }} </div>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="myform form ">
                            <form class="form-wrapper" action="{{ route('web.auth.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control my-input" id="name"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control my-input" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control my-input" id="password"
                                        placeholder="Password">
                                </div>

                                <div class="text-center ">
                                    <button type="submit" class=" btn btn-block send-button tx-tfm">T???o t??i kho???n</button>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="login-or">
                                       <hr class="hr-or">
                                       <span class="span-or">or</span>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <a class="btn btn-block g-button" href="{{ route('web.auth.login') }}">
                               ????ng nh???p
                                    </a>
                                 </div>

                                <p class="small mt-3">B???ng c??ch nh???p v??o ????ng k??, b???n ?????ng ?? v???i
                                    <a href="#" class="ps-hero__content__link">??i???u kho???n s??? d???ng </a> v?? <a href="#">ch??nh
                                        s??ch quy???n ri??ng t??</a>.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </section>
@endsection
