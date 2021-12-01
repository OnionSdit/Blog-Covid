@extends('web.layout.master')

@section('title', 'Liên hệ | Thongtincovid')

@section('content')
    <style>
        .team-boxed {
            color: #313437;
            background-color: #eef4f7;
        }

        .team-boxed p {
            color: #7d8285;
        }

        .team-boxed h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }

        @media (max-width:767px) {
            .team-boxed h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }

        .team-boxed .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
        }

        .team-boxed .intro p {
            margin-bottom: 0;
        }

        .team-boxed .people {
            padding: 50px 0;
        }

        .team-boxed .item {
            text-align: center;
        }

        .team-boxed .item .box {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            margin-bottom: 30px;
        }

        .team-boxed .item .name {
            font-weight: bold;
            margin-top: 28px;
            margin-bottom: 8px;
            color: inherit;
        }

        .team-boxed .item .title {
            text-transform: uppercase;
            font-weight: bold;
            color: #d0d0d0;
            letter-spacing: 2px;
            font-size: 13px;
        }

        .team-boxed .item .description {
            font-size: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .team-boxed .item img {
            max-width: 160px;
        }

        .team-boxed .social {
            font-size: 18px;
            color: #a2a8ae;
        }

        .team-boxed .social a {
            color: inherit;
            margin: 0 10px;
            display: inline-block;
            opacity: 0.7;
        }

        .team-boxed .social a:hover {
            opacity: 1;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="team-boxed" style="margin-top: 90px">
        <div class="container">
            <div class="intro">
                <div class="text-center">
                    <img src="https://static.mediacdn.vn/covid19.gov.vn/image/logo.png" alt=""/>
                </div>
                <div class="text-center">
                <h2 style="display: inline;"><a href="/" style=" color: #00b3e5">Thongtincovid</a></h2>
                <p style="display: inline;"> là một website phi lợi nhuận với nhiệm vụ là chia sẻ cập nhật thông tin,
                    kiến thức, tình hình dịch bệnh cho tất cả mọi người</p>
                </div>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle"
                            src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.6435-9/166977050_303510497962637_1060519552189703272_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=RuzOEPzjxigAX-i-bwa&_nc_ht=scontent.fsgn2-1.fna&oh=4713fc8d753445d1f19b1c443b7dd6e7&oe=61CBFEFD">
                        <h3 class="name">VO HUNG HOAN</h3>
                        <p class="title">DATABASE</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/profile.php?id=100049110678162"><i
                                    class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-github"
                                    aria-hidden="true"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle"
                            src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.6435-9/48208237_1209224322550217_4319135459226681344_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=174925&_nc_ohc=V0haxnDWWYwAX_wW_NR&tn=RMEA8Ii6iyRixLdc&_nc_ht=scontent.fsgn2-1.fna&oh=9dd30a27932ada4ecaa02c9d1a452863&oe=61CA9442">
                        <h3 class="name">SON PHUC DAT</h3>
                        <p class="title">Leader</p>
                        <p class="description">
                        </p>
                        <div class="social"><a href="https://www.facebook.com/FB.SPD/"><i
                                    class="fa fa-facebook-official"></i></a><a href="https://github.com/OnionSdit"><i
                                    class="fa fa-github" aria-hidden="true"></i></a><a href="#"><i
                                    class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle"
                            src="https://bcons.com.vn/wp-content/uploads/2019/11/avatar.jpg">
                        <h3 class="name">NGUYEN HUU AN</h3>
                        <p class="title">CONTENT</p>
                        <p class="description"></p>
                        <div class="social"><a href="https://www.facebook.com/OnionsAit"><i
                                    class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-github"
                                    aria-hidden="true"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
