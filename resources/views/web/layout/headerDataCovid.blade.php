<style>
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

    .home__statistical {
        margin: 30px 0 20px;
    }

    .home__statistical-nav {
        margin-bottom: 9.5px;
    }

    @media (max-width: 767px) {
        .home__statistical-nav {
            margin-bottom: 13px;
        }
    }

    .home__statistical-nav ul {
        display: flex;
        align-items: center;
    }

    .home__statistical-nav ul li {
        display: flex;
        align-items: center;
        margin-left: 16px;
    }

    @media (max-width: 767px) {
        .home__statistical-nav ul li {
            margin-left: 0;
        }
    }

    .home__statistical-nav ul li:before {
        content: "/";
        height: 24px;
        left: 0;
        font-size: 34px;
        margin-right: 16px;
        position: relative;
        top: -6px;
        color: #C0C1DE;
    }

    @media (max-width: 767px) {
        .home__statistical-nav ul li:before {
            display: none;
        }
    }

    .home__statistical-nav ul li:first-child {
        margin-left: 0px;
    }

    .home__statistical-nav ul li:first-child:before {
        display: none;
    }

    .home__statistical-nav ul li a {
        font-weight: bold;
        font-size: 18px;
        line-height: 130%;
        color: rgba(46, 49, 146, 0.6);
        display: block;
        position: relative;
        font-family: 'Merriweather';
    }

    @media (max-width: 767px) {
        .home__statistical-nav ul li a {
            padding-left: 0;
            margin-right: 20px;
            border-bottom: 3px solid transparent;
            font-size: 18px;
            line-height: 130%;
            color: #666666;
        }

        .home__statistical-nav ul li a.active {
            border-bottom-color: #2E3192;
            color: #2E3192;
        }

        .home__statistical-nav ul li a:before,
        .home__statistical-nav ul li a:after {
            display: none;
        }
    }

    .home__statistical-nav ul li a.active {
        font-size: 22px;
        line-height: 130%;
        color: #2E3192;
        font-weight: 700;
        font-family: 'Merriweather';
        padding-left: 16px;
        position: relative;
    }

    @media (max-width: 767px) {
        .home__statistical-nav ul li a.active {
            padding-left: 0;
        }
    }

    .home__statistical-nav ul li a.active:before {
        content: "";
        width: 3px;
        height: 24px;
        background: #2E3192;
        left: 0;
        top: 2px;
        position: absolute;
    }

    .home__statistical-nav ul li a.active:after {
        content: "";
        width: 3px;
        height: 24px;
        background: #ED1C24;
        left: 3px;
        top: 2px;
        position: absolute;
    }

    .home__statistical-nav-content {
        display: flex;
        justify-content: space-between;
    }

    .home__statistical-nav-content .content-tab {
        width: 100%;
        display: none;
    }

    .home__statistical-nav-content .content-tab.show {
        display: block;
    }

    .home__statistical-list {
        display: flex;
        justify-content: space-between;
    }

    @media (max-width: 1199px) {
        .home__statistical-list {
            flex-wrap: wrap;
        }
    }

    #en .item .note {
        display: none;
    }

    .home__statistical-list .item p {
        text-align: center;
    }

    .home__statistical-list .item {
        width: calc(33% - 9.75px);
        text-align: center;
        background: rgba(237, 28, 36, 0.1);
        padding: 8px;
    }

    @media (max-width: 1000px) {
        .home__statistical-list .item {
            width: calc(33% - 10px);
            margin-bottom: 10px;
        }
    }

    @media (max-width: 767px) {
        .home__statistical-list .item {
            width: calc(33% - 6.5px);
            margin-bottom: 13px;
        }
    }

    .home__statistical-list .item:nth-child(2) {
        background: rgba(255, 156, 0, 0.1);
    }

    .home__statistical-list .item:nth-child(2) .value {
        color: #FF9C00;
    }

    .home__statistical-list .item:nth-child(3) {
        background: rgba(40, 167, 69, 0.1);
    }

    .home__statistical-list .item:nth-child(3) .value {
        color: #28A745;
    }

    .home__statistical-list .item:nth-child(4) {
        background: #F0EFF4;
    }

    .home__statistical-list .item:nth-child(4) .value {
        color: #333333;
    }

    .home__statistical-list .item .text {
        font-size: 13px;
        line-height: 160%;
        text-align: center;
        color: #333333;
        font-family: 'Merriweather';
        font-weight: 600;
    }

    .home__statistical-list .item .value {
        font-weight: 800;
        font-size: 18px;
        line-height: 22px;
        color: #ED1C24;
        font-family: 'Merriweather';
    }

    .home__statistical-list .item .note {
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 160%;
        color: #666666;
    }

    .home__statistical-list .item .note span {
        font-weight: 600;
    }

    .home__juncture-flex {
        margin-top: 7px;
        display: flex;
        justify-content: space-between;
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

    .hidden {
        display: none;
    }

</style>

<div id="topinfo">
    <div class="box-top">
        <div class="home__statistical-nav">
            <ul>
                <li><a href="javascript:void(0);" id="tabvi" title="" class="active">Việt Nam</a></li>

            </ul>
        </div>
        <div class="home__statistical-nav-content">
            <div class="content-tab show" id="vi">
                <div class="home__statistical-list">
                    <div class="item">
                        <p class="text">SỐ CA NHIỄM</p>
                        <p id="cases" class="value"></p>
                        <p class="note">Hôm nay<span id="today-cases"></span></p>
                    </div>
                    <div class="item ">
                        <p class="text">ĐANG ĐIỀU TRỊ</p>
                        <p id="treating" class="value"></p>
                        <p class="note">Hôm nay<span id="today-treating"></span></p>
                    </div>
                    <div class="item">
                        <p class="text">KHỎI</p>
                        <p id="recovered" class="value"></p>
                        <p class="note">Hôm nay<span id="today-recovered"></span></p>
                    </div>
                    <div class="item">
                        <p class="text">TỬ VONG</p>
                        <p id="death" class="value"></p>
                        <p class="note">Hôm nay<span id="today-death"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
