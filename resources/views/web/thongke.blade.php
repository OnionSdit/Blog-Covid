@extends('web.layout.master')

@section('title', 'Cập nhật tin tức Covid-19')

@section('content')
    <style>
        body {
            margin: 0;
            padding: 0
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        @font-face {
            font-family: "Merriweather";
            font-weight: 400;
            font-style: normal;
            src: url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Regular.woff2") format("woff2"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Regular.woff") format("woff"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Regular.ttf") format("truetype"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Regular.eot") format("embedded-opentype");
        }

        @font-face {
            font-family: "Merriweather";
            font-weight: 500;
            font-style: normal;
            src: url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Medium.woff2") format("woff2"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Medium.woff") format("woff"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Medium.ttf") format("truetype"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Medium.eot") format("embedded-opentype");
        }

        @font-face {
            font-family: "Merriweather";
            font-weight: 600;
            font-style: normal;
            src: url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-SemiBold.woff2") format("woff2"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-SemiBold.woff") format("woff"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-SemiBold.ttf") format("truetype"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-SemiBold.eot") format("embedded-opentype");
        }

        @font-face {
            font-family: "Merriweather";
            font-weight: 700;
            font-style: normal;
            src: url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Bold.woff2") format("woff2"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Bold.woff") format("woff"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Bold.ttf") format("truetype"), url("https://static.pipezero.com/covid-sumary/fonts/MerriweatherSans-Bold.eot") format("embedded-opentype");
        }

        a {
            text-decoration: none;
            color: #333333;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        p {
            margin: 0;
        }

        .home__juncture-flex {
            display: flex;
            justify-content: space-between;
        }

        .home__statistical-nav ul {
            display: flex;
            justify-content: space-between;
        }

        .home__statistical-nav ul li span {
            font-size: 22px;
            line-height: 130%;
            color: #2E3192;
            font-weight: 700;
            font-family: 'Merriweather';
            padding-left: 16px;
        }

        .home__statistical-nav ul li span:before {
            content: "";
            width: 3px;
            height: 24px;
            background: #2E3192;
            left: 0;
            top: 2px;
            position: absolute;
        }

        .home__statistical-nav ul li span:after {
            content: "";
            width: 3px;
            height: 24px;
            background: #ED1C24;
            left: 3px;
            top: 2px;
            position: absolute;
        }

        @media (max-width: 991px) {
            .home__juncture-flex {
                flex-wrap: wrap;
            }
        }

        .home__juncture-flex .box-juncture {
            width: calc(50% - 20px);
        }

        @media (max-width: 991px) {
            .home__juncture-flex .box-juncture {
                width: 100%;
                margin-bottom: 20px;
            }

            .home__juncture-flex .box-juncture:last-child {
                margin-bottom: 0;
            }
        }

        .home__juncture-flex .table-left {
            border: 1px solid #EAEAF4;
            box-sizing: border-box;
            border-radius: 3px;
            height: 100%;
            padding: 0 10px;
            position: relative;
        }

        @media (max-width: 991px) {
            .home__juncture-flex .table-left {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 575px) {
            .home__juncture-flex .table-left {
                padding: 0px;
            }
        }

        .home__juncture-flex .table-left .row {
            width: 100%;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 15px;
            font-size: 15px;
            line-height: 100%;
            color: #333333;
            font-family: 'Merriweather';
            padding: 15px 10px;
        }

        .home__juncture-flex .table-left .row:last-child {
            border-bottom: 0;
        }

        .home__juncture-flex .table-left .row.head {
            font-weight: 500;
            margin: 0 10px;
            width: calc(100% - 20px);
        }

        .home__juncture-flex .table-left .row .die {
            width: 69px;
            text-align: right;
            margin-left: 10px;
        }

        .home__juncture-flex .table-left .row .daynow {
            width: 74px;
            text-align: right;
            margin-left: 10px;
        }

        .home__juncture-flex .table-left .row .daynow.red {
            color: #DA2E59;
        }

        .home__juncture-flex .table-left .row .total {
            width: 80px;
            text-align: right;
            margin-left: 10px;
        }

        .home__juncture-flex .table-left .row .city {
            flex: 1;
        }

        .home__juncture-flex .table-left .tbody {
            max-height: 400px;
            overflow-y: auto;
            padding: 0 10px;
            scrollbar-color: #f0eff4 white;
            scrollbar-width: thin;
        }

        .home__juncture-flex .table-left .tbody::-webkit-scrollbar {
            width: 5px;
        }

        .home__juncture-flex .table-left .tbody::-webkit-scrollbar-track {
            background: #fff;
        }

        .home__juncture-flex .table-left .tbody::-webkit-scrollbar-thumb {
            background: #F0EFF4;
        }

        .home__juncture-flex .chart-right {
            border: 1px solid #EAEAF4;
            box-sizing: border-box;
            border-radius: 3px;
            padding: 10px;
            height: 100%;
        }

        @media (max-width: 991px) {
            .home__juncture-flex .chart-right {
                width: 100%;
            }
        }

        .home__juncture-flex .chart-right .chart-top {
            display: flex;
            justify-content: space-between;
        }

        @media (max-width: 1000px) {
            .home__juncture-flex .chart-right .chart-top {
                flex-wrap: wrap;
            }
        }

        .home__juncture-flex .chart-right .chart-top .item {
            display: block;
            padding: 10px 8px;
            background: rgba(46, 49, 146, 0.1);
            border-radius: 3px;
            margin-left: 5px;
            font-family: Arial;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            line-height: 100%;
            display: flex;
            align-items: center;
            color: #757575;
        }

        .home__juncture-flex .chart-right .chart-top .item:first-child {
            margin-left: 0;
        }

        .home__juncture-flex .chart-right .chart-top .item.active {
            background: #2E3192;
            color: #fff;
        }

        .home__juncture-flex .chart-right .chart-top .nav-type {
            display: flex;
        }

        @media (max-width: 1000px) {
            .home__juncture-flex .chart-right .chart-top .nav-type {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }
        }

        .home__juncture-flex .chart-right .chart-top .nav-name {
            display: flex;
        }

        @media (max-width: 1000px) {
            .home__juncture-flex .chart-right .chart-top .nav-name {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }

            .home__juncture-flex .chart-right .chart-top .nav-name .item:first-child {
                margin-left: 0;
            }
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #container {
            height: 400px;
        }

        .btn-load .xem-them {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='14' height='17' viewBox='0 0 14 17' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M0.299804 9.60859L1.6998 8.20859L5.9998 12.5086L5.9998 0.308594L7.9998 0.308594L7.9998 12.5086L12.2998 8.20859L13.6998 9.60859L6.9998 16.3086L0.299804 9.60859Z' fill='%23757575'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: 9px 7px;
        }

        .btn-load .rut-gon {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='14' height='17' viewBox='0 0 14 17' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M0.300048 7.2238L1.70005 8.6238L6.00005 4.3238L6.00005 16.5238L8.00005 16.5238L8.00005 4.3238L12.3 8.6238L13.7 7.2238L7.00005 0.523803L0.300048 7.2238Z' fill='%23757575'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: 9px 7px;
        }

        .btn-load {
            margin-top: 15px;
            display: none;
            text-align: center;
        }

        .btn-load a {
            background: #E5E5E5;
            border-radius: 100px;
            font-size: 14px;
            color: #757575;
            height: 32px;
            position: relative;
            line-height: 32px;
            padding: 0 15px 0 30px;
            display: inline-block;
            font-family: 'Merriweather';
        }

        a.hidden {
            display: none;
        }

        @media (max-width: 575px) {
            .home__juncture-flex .table-left .row {
                padding: 15px 0px;
            }

            .btn-load {
                display: block;
            }

            .home__juncture-flex .table-left .tbody {
                max-height: none;
                overflow-y: none;
                padding: 0 10px;
                scrollbar-color: #f0eff4 white;
                scrollbar-width: thin;
            }

            div.tbody div:nth-child(7)~div {
                display: none !important;
            }

            div.all div:nth-child(7)~div {
                display: flex !important;
            }

            .all {
                max-height: none !important;
                overflow-y: none;
            }
        }

    </style>

    <div class="home__statistical-nav" style="margin-top: 100px">
        <ul>
            <li>
                <span>Tình hình dịch cả nước</span>
            </li>
        </ul>
    </div>
    <div class="home__juncture-flex">
        <div class="box-juncture" id="location">
            <div class="table-left">
                <div class="row head"><span class="city">Tỉnh/TP</span><span class="total">Tổng số
                        ca</span><span class="daynow">Hôm nay</span><span class="die">Tử vong</span></div>
                <div class="tbody" id="render-table">
                </div>
            </div>
        </div>
        <div class="box-juncture">
            <canvas id="myChart" width="300" height="200"></canvas>
        </div>
    </div>
    <script>
        function l(t, e, a) {
            var i = document.createElement("script");
            i.type = "text/javascript", i.async = !0, i.src = t, 2 <= arguments.length && (i.onload = e, i
                .onreadystatechange = function() {
                    4 != i.readyState && "complete" != i.readyState || e()
                }), i.onerror = function() {
                if (void 0 !== a) try {
                    a()
                } catch (t) {}
            }, document.getElementsByTagName("head")[0].appendChild(i)
        }
    </script>
    <script type="text/javascript" async="" src="https://static.pipezero.com/covid-sumary/highcharts.js"></script>
