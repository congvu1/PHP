<style>
    /* slide */

    body,
    html {

        width: 100%;
        height: 90%;
        padding: 0;
        margin: 0;
        display: block;
        position: relative;
        text-decoration: none;
        font-family: 'Slabo 27px', serif;
        font-size: 16px;


    }

    font {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        padding: 0;
        margin: 0;

    }

    ul,
    li,
    p {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    a {
        text-decoration: none;
    }

    .wrapper {
        height: 100%;
        width: 100%;
        display: block;
        text-decoration: none;
        overflow: hidden;

    }

    .wrapper .container {
        height: 100%;
        width: 100%;
        display: block;
        overflow: hidden;
        text-decoration: none;


    }

    .slideshow {
        height: 100%;
        width: 100%;
        display: block;
        overflow: hidden;

    }

    .slideshow .slideshow-left {
        width: 40%;
        float: left;
        position: relative;
        height: 100%;


    }

    .slideshow .slideshow-left .Lslide {
        height: 100%;
        display: block;
        overflow: hidden;
        position: absolute;
        bottom: 0px;
        top: 0;
        left: 0;
        right: 0;

    }

    .slideshow .Lslide-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);

    }

    .slideshow .Lslide-content h2 {
        color: #fff;
        font-weight: 600;
        font-size: 60px;
        line-height: 0.8;
    }

    .slideshow .Lslide-content p {
        color: #fff;
        padding: 2.5em 0em;
    }

    .slideshow .Lslide-content .button {
        background-color: #fff;
        display: inline-block;
        border-radius: 25px;
        position: relative;
    }

    .slideshow .Lslide-content .button i {
        float: right;
        position: absolute;
        top: 50%;
        right: 2.5em;
        color: #000;
        font-size: 9px;
        transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transition: all 0.5s;
    }

    .slideshow .Lslide-content .button:hover i {
        right: 1.7em;
    }

    .slideshow .Lslide-content .button p {
        margin: 0;
        padding: 0;
        color: #000;
        text-align: left;
        padding: 0.8em 8em 0.8em 1.5em;
        font-size: 12px;
        font-weight: 600;
    }

    .slideshow .slideshow-right {
        width: 60%;
        float: left;
        position: relative;
        height: 100%;
    }

    .slideshow .slideshow-right .Rslide {
        height: 100%;
        display: block;
        overflow: hidden;
        position: absolute;
        bottom: 0px;
        top: 0;
        left: 0;
        right: 0;
    }

    .slideshow .slideshow-right .Rslide img {
        min-width: 100%;
    }

    .control {
        position: absolute;

        left: 40%;
        top: 50%;
        transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
    }

    .control i {
        left: 0;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        text-align: center;
        position: absolute;
        color: white;
        transition: all 0.3s;
        -ms-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
    }

    .control .control-top {
        width: 45px;
        height: 50px;
        background-color: black;
        z-index: 5;
        position: relative;
        border-radius: 0px 4px 4px 0px;
        cursor: pointer;
    }

    .control .control-top:hover i {
        color: #333333;
    }

    .control .control-bottom {
        width: 45px;
        height: 50px;
        background-color: black;
        z-index: 5;
        position: relative;
        border-radius: 4px 0px 0px 4px;
        left: -45px;
        cursor: pointer;
    }

    .control .control-bottom:hover i {
        color: #333333;
    }

    /* slide */
    /* --button */
    button {
        margin: 20px;
    }

    .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
    }


    /* READMORE */
    .btn-5 {
        width: 200px;
        height: 40px;
        line-height: 42px;
        text-decoration: none;
        padding: 0;
        border: none;
        background: rgb(255, 255, 255);
        background: linear-gradient(0deg, rgb(40, 40, 40) 0%, rgb(162, 162, 162) 100%);
    }

    .btn-5:hover {
        color: #000000;
        background: transparent;
        box-shadow: none;
        text-decoration: none;

    }

    .btn-5:before,
    .btn-5:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 2px;
        width: 0;
        background: #000000;
        box-shadow:
            -1px -1px 5px 0px #fff,
            7px 7px 20px 0px #0003,
            4px 4px 5px 0px rgba(68, 255, 0, 0.133);
        transition: 400ms ease all;
        text-decoration: none;
    }

    .btn-5:after {
        right: inherit;
        top: inherit;
        left: 0;
        bottom: 0;
        text-decoration: none;
    }

    .btn-5:hover:before,
    .btn-5:hover:after {
        width: 100%;
        transition: 1500ms ease all;
        text-decoration: none;
    }

    /* ------8 */
    /* 8 */
    .btn-8 {
        background-color: #f0ecfc;
        background-image: linear-gradient(315deg, #f0ecfc 0%, #000000 74%);
        line-height: 42px;
        padding: 0;
        border: none;
    }

    .btn-8 span {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
    }

    .btn-8:before,
    .btn-8:after {
        position: absolute;
        content: "";
        right: 0;
        bottom: 0;
        background: #000000;
        /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
        transition: all 0.3s ease;
    }

    .btn-8:before {
        height: 0%;
        width: 2px;
    }

    .btn-8:after {
        width: 0%;
        height: 2px;
    }

    .btn-8:hover:before {
        height: 100%;
    }

    .btn-8:hover:after {
        width: 100%;
    }

    .btn-8:hover {
        background: transparent;
    }

    .btn-8 span:hover {
        color: #000000;
    }

    .btn-8 span:before,
    .btn-8 span:after {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        background: #000000;
        /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
        transition: all 0.3 s ease;
    }

    .btn-8 span:before {
        width: 2px;
        height: 0%;
    }

    .btn-8 span:after {
        height: 2px;
        width: 0%;
    }

    .btn-8 span:hover:before {
        height: 100%;
    }

    .btn-8 span:hover:after {
        width: 100%;
    }

    /* -----8 */

    /* ---12 */

    .btn-12 {
        position: relative;
        right: 20px;
        bottom: 20px;
        border: none;
        box-shadow: none;
        width: 130px;
        height: 40px;
        line-height: 42px;
        -webkit-perspective: 230px;
        perspective: 230px;
    }

    .btn-12 span {
        background: rgb(0, 0, 0);
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(0, 0, 0) 100%);
        display: block;
        position: absolute;
        width: 130px;
        height: 40px;
        box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        border-radius: 5px;
        margin: 0;
        text-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .btn-12 span:nth-child(1) {
        box-shadow:
            -7px -7px 20px 0px #fff9,
            -4px -4px 5px 0px rgba(0, 0, 0, 0.6),
            7px 7px 20px 0px #0002,
            4px 4px 5px 0px rgba(255, 255, 255, 0.067);
        -webkit-transform: rotateX(90deg);
        -moz-transform: rotateX(90deg);
        transform: rotateX(90deg);
        -webkit-transform-origin: 50% 50% -20px;
        -moz-transform-origin: 50% 50% -20px;
        transform-origin: 50% 50% -20px;
    }

    .btn-12 span:nth-child(2) {
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        transform: rotateX(0deg);
        -webkit-transform-origin: 50% 50% -20px;
        -moz-transform-origin: 50% 50% -20px;
        transform-origin: 50% 50% -20px;
    }

    .btn-12:hover span:nth-child(1) {
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        transform: rotateX(0deg);
    }

    .btn-12:hover span:nth-child(2) {
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        color: transparent;
        -webkit-transform: rotateX(-90deg);
        -moz-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
    }

    /* -----12 */
    /* READMORE */

    /* ANH QUANG CAO */

    .anhqc {
        display: block;
        max-width: 100%;
        max-height: 100%;


    }

    /* ANH QUANG CAO */
    /* sale */
    .sale {
        position: relative;
        display: inline-block;
        background: red;
        color: white;
        bottom: 300px;
        height: 2.5rem;
        width: 2.5rem;
        text-align: center;
        vertical-align: middle;
        text-decoration: none;
        line-height: 2.5rem;
        transform: rotate(-20deg);
        animation: beat 0.5s ease infinite alternate;
    }

    .sale:before,
    .sale:after {
        content: "";
        position: absolute;
        background: inherit;
        height: inherit;
        width: inherit;
        top: 0;
        left: 0;
        z-index: -1;
        transform: rotate(30deg);
    }

    .sale:after {
        transform: rotate(60deg);
    }


    @keyframes beat {
        from {
            transform: rotate(-20deg) scale(1);
        }

        to {
            transform: rotate(-20deg) scale(1.1);
        }
    }
</style>


<!-- slide -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>

    <div class="wrapper" style="background-color: #4c4c4c;">
        <div class="container">

            <div class="slideshow">

                <div class="slideshow-left">

                    <div class="Lslide">
                        <div class="Lslide-content">
                            <h2 style="color: #E5E537;">FRANK’S STORY</h2>
                            <p> Trong thời hiện đại, định hình phong cách cá nhân giúp khẳng định “chất” riêng của
                                bạn. Nếu như coi trang phục là thứ giúp bạn khác biệt thì phụ kiện chính là “gia vị”
                                tạo nên sự tinh tế, lịch lãm cho bạn.</p>

                            <div class="button">
                                <a href="#">
                                    <p>More</p>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="Lslide">
                        <div class="Lslide-content">
                            <h2 style="color: #00FF7F;">FRANK’S STORY</h2>
                            <p> Frank tin rằng những sản phẩm đồ da cao cấp cũng nên được dễ dàng đến gần hơn với
                                tất cả các khách hàng, tại sao sản phẩm cứ phải đắt mới là sản phẩm chất lượng?</p>

                            <div class="button">
                                <a href="#">
                                    <p>More</p>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="Lslide">
                        <div class="Lslide-content">
                            <h2 style="color: #F43F3F;">FRANK’S STORY</h2>
                            <p>Frank được ra đời vì chúng tôi chưa thể tìm được những sản phẩm thuần Việt có phong
                                cách hiện đại, chất lượng tốt mà có giá cả hợp lý. Các sản phẩm đó luôn có giá thành
                                quá cao, hoặc có thiết kế hầu như đã quá lỗi thời</p>

                            <div class="button">
                                <a href="#">
                                    <p>More</p>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="slideshow-right">

                    <div class="Rslide">
                        <img src="https://cf.shopee.vn/file/vn-11134207-23010-omy1tbxqz4lv4c" alt="">
                    </div>

                    <div class="Rslide">
                        <img src="https://frcnk.com/wp-content/uploads/2022/10/1-01-4-scaled.jpg" alt="">
                    </div>
                    <div class="Rslide">
                        <img src="https://frcnk.com/wp-content/uploads/2021/09/Clutch-full-box-1.jpg" alt="">
                    </div>
                </div>


                <div class="control">
                    <div class="oncontrol control-top">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </div>
                    <div class="oncontrol control-bottom">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
    <script>
        var Lslide = document.querySelectorAll('.Lslide'),
            Rslide = document.querySelectorAll('.Rslide'),
            control = document.querySelectorAll('.oncontrol'),
            slideHeight = document.querySelector('.wrapper').clientHeight,
            color = ['#4c4c4c', '#4c4c4c', '#4c4c4c'],
            index = 0;


        function init() {
            slideHeight = document.querySelector('.wrapper').clientHeight;
            for (i = 0; i < Lslide.length; i++) {
                Lslide[i].style.backgroundColor = color[i];
                Lslide[i].style.top = -slideHeight * i + "px";
                Rslide[i].style.top = slideHeight * i + "px";
            }
        }
        init()
        window.addEventListener('resize', function () {
            init()
        });

        function moveToTop() {

            index++;
            for (el = 0; el < Lslide.length; el++) {
                Lslide[el].style.top = parseInt(Lslide[el].style.top) + slideHeight + "px";
                Rslide[el].style.top = parseInt(Rslide[el].style.top) - slideHeight + "px";
            }

            if (index > Lslide.length - 1) {
                index = 0;
                for (el = 0; el < Lslide.length; el++) {
                    Lslide[el].style.top = -slideHeight * el + "px";
                    Rslide[el].style.top = slideHeight * el + "px";
                }
            }
        }

        function moveToBottom() {
            index--;
            for (el = 0; el < Lslide.length; el++) {
                Lslide[el].style.top = parseInt(Lslide[el].style.top) - slideHeight + "px";
                Rslide[el].style.top = parseInt(Rslide[el].style.top) + slideHeight + "px";

            }
            if (index < 0) {
                index = Rslide.length - 1;
                for (el = 0; el < Lslide.length; el++) {
                    Lslide[el].style.top = parseInt(Lslide[el].style.top) + slideHeight * Lslide.length + "px";
                    Rslide[el].style.top = parseInt(Rslide[el].style.top) - slideHeight * Rslide.length + "px";
                }
            }
        }

        function transition() {
            for (t = 0; t < Lslide.length; t++) {
                Lslide[t].style.transition = "all 0.2s";
                Rslide[t].style.transition = "all 0.2s";
            }
        }


        for (t = 0; t < control.length; t++) {
            control[t].addEventListener("click", function () {

                if (this.classList.contains('control-top')) {
                    moveToTop()
                }
                if (this.classList.contains('control-bottom')) {
                    moveToBottom()
                }

                transition()

            });
        }

        var wheeling;
        function mousemouve(e) {

            clearTimeout(wheeling);
            e.preventDefault();
            var e = window.event || e;
            var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

            wheeling = setTimeout(function () {
                wheeling = undefined;
                if (delta === 1) {
                    moveToTop()
                }
                if (delta === -1) {
                    moveToBottom()
                }
            }, 100);

            transition()
        }


    </script>






    <!-- slide -->

    <!-- Content 1 -->

    <!-- Content 1 -->

    <!-- tabs -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <div class="container mt-5" ng-controller="vungsp">
        <div class="row">
            <div class="col-12" style="height: 600px;">
                <ul class="nav nav-pills">
                    <li class=" "><a class=" nav-link tabs" data-toggle="tab" style="text-transform: uppercase;"
                            data-target="#menu">
                            <font size="7px" color="#e5e537">OXFORD

                            </font>
                            <hr color="blue" width="200px" />
                        </a></li>



                    <li class=" "><a class=" nav-link tabs" data-toggle="tab" style="text-transform: uppercase;"
                            data-target="#menu1">
                            <font size="7px" color="#00ff7f">LOAFER</font>
                            <hr color="blue" width="200px" />
                        </a></li>
                    <li class=" "><a class=" nav-link tabs" data-toggle="tab" style="text-transform: uppercase;"
                            data-target="#menu2">
                            <font size="7px" color="#f43f3f">DERBY</font>
                            <hr color="blue" width="200px" />
                        </a></li>
                </ul>
                <div class="tab-content ">
                    <div id="menu" class="tab-pane fade in active show active">
                        <!-- Vungsanpham1 Sanphammoi -->
                        <div class="vungsanpham mt-5">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $db = new sanpham();
                                    $array = $db->getspm()->fetchAll();
                                    foreach ($array as $row) {
                                        ?>
                                        <div class="col-3">
                                            <div class="card">
                                                <a
                                                    href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>"><img
                                                        class="card-img-top" src="./View/Anh/<?php echo $row['img'] ?>"
                                                        alt=""></a>
                                                <div class="card-body text-center">
                                                    <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>"
                                                        class="card-title text-center"><?php echo $row['tensp']; ?></a>
                                                    <a
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">
                                                        <p class="card-text text-center text-danger mb-4">
                                                            <?php echo number_format($row['gia']) ?>
                                                        </p>
                                                    </a>
                                                    <a>
                                                        <a class="custom-btn btn-5"
                                                            href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">READ
                                                            MORE
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Vungsanpham1 -->
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <!-- Vungsanpham2 Sanphambanchay-->
                        <div class="vungsanpham mt-5">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $db = new sanpham();
                                    foreach ($db->getspbc()->fetchAll() as $row) {
                                        ?>
                                        <div class="col-3">
                                            <div class="card">
                                                <a
                                                    href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>"><img
                                                        class="card-img-top" src="./View/Anh/<?php echo $row['img'] ?>"
                                                        alt=""></a>
                                                <div class="card-body text-center">
                                                    <a
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">
                                                        <h5 class="card-title ">
                                                            <?php echo $row['tensp'] ?>
                                                        </h5>
                                                    </a>
                                                    <a
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">
                                                        <p class="card-text text-danger mb-4">
                                                            <?php echo number_format($row['gia']) ?>
                                                        </p>
                                                    </a>
                                                    <a class="custom-btn btn-5"
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">READ
                                                        MORE
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <!-- Vungsanpham2 -->
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <!-- Vungsanpham3 Sanphamphobien-->
                        <div class="vungsanpham mt-5">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $db = new sanpham();
                                    $result = $db->getsppb();
                                    while ($row = $result->fetch()):
                                        ?>
                                        <div class="col-3">
                                            <div class="card">
                                                <a
                                                    href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>">
                                                    <img class="card-img-top" src="./View/Anh/<?php echo $row['img'] ?>"
                                                        alt=""></a>
                                                <div class="card-body text-center">
                                                    <a
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>">
                                                        <h5 class="card-title">
                                                            <?php echo $row['tensp'] ?>
                                                        </h5>
                                                    </a>
                                                    <a
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>">
                                                        <p class="card-text text-danger mb-4">
                                                            <?php echo number_format($row['gia']) ?>
                                                        </p>
                                                    </a>
                                                    <a class="custom-btn btn-5"
                                                        href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">READ
                                                        MORE
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile ?>

                                </div>
                            </div>
                        </div>
                        <!-- Vungsanpham3-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tabs -->


    <!-- Phu Kien Khac -->
    <div class="vungsanpham" ng-controller="phukienkhac">
        <div class="container mt-5">
            <h3 class="text-center">NEW ARRIVALS</h3>
            <hr width="100%" style="border-top:2px solid black ;">
            <div class="row mt-5">

                <?php
                $db = new sanpham();
                foreach ($db->getpkk()->fetchAll() as $row):
                    ?>
                    <div class="col-3 mt-5">
                        <div class="card">
                            <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>"><img
                                    class="card-img-top" src="./View/Anh/<?php echo $row['img'] ?>" alt=""></a>
                            <div class="card-body text-center">
                                <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>">
                                    <h5 class="card-title ">
                                        <?php echo $row['tensp'] ?>
                                    </h5>
                                </a>
                                <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>">
                                    <p class="card-text text-danger mb-4">
                                        <?php echo number_format($row['gia']) ?> VND
                                    </p>
                                </a>
                                <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">
                                    <button class="custom-btn btn-12"><span>Click!</span><span>Xem Chi
                                            Tiết</span></button></a>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="text-center  mt-2 mb-5">
                <a href="index.php?act=sanpham&&action=sanpham&&nhom=pkk" class="btn btn-dark"
                    style="min-width:350px">Xem
                    Thêm</a>

            </div>
        </div>
    </div>
    <!-- Phu Kien Khac -->

    <!-- img khuyenmai-->
    <div class="container">
        <a>
            <div class="row">
                <div class="col-12">
                    <img class="anhqc" src="./View/Anh/anhquangcao.jpg" width="100%" alt="">



                </div>
            </div>
    </div>
    </div>
    <!-- ANh -->

    <!-- san pham giam gia-->


    <div class="vungsanpham" ng-Controller="spgiamgia">
        <div class="container mt-5">
            <h3 class="text-center">SALE OFF</h3>
            <hr width="100%" style="border-top: 4px solid black;">
            <div class="row">

                <?php
                $db = new sanpham();
                foreach ($db->getpkgg()->fetchAll() as $row):
                    ?>
                    <div class="col-lg-3 mb-0">
                        <div class="card text-center">
                            <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id'] ?>"><img
                                    class="card-img-top khuyenmai" src="./View/Anh/<?php echo $row['img'] ?>" alt=""></a>
                            <span class="sale">-30%</span>
                            <div class="card-body">
                                <a href="index.php?act=sanpham&&act=chitiet&&id=<?php echo $row['id'] ?>">
                                    <h4 class="card-title">
                                        <?php echo $row['tensp'] ?>
                                    </h4>
                                </a>
                                <p class="card-text mb-4"><strike class="text-danger">
                                        <?php echo number_format($row['gia']) ?> VND
                                    </strike> <a href="index.php?act=chitiet" style="color:black">
                                        <?php echo number_format($row['giamgia']) ?> VND
                                    </a> </p>
                                <a href="index.php?act=sanpham&&action=chitiet&&id=<?php echo $row['id']; ?>">
                                    <button class="custom-btn btn-8"><span>Xem Chi Tiết</span></button></a>
                            </div>
                            <div class="thirty"></div>
                        </div>
                    </div>
                    <?php
                endforeach
                ?>


            </div>

            <div class="text-center mt-1 mb-4">
                <a href="index.php?act=sanpham&&action=sanpham&&nhom=spgg" class="btn btn-dark"
                    style="min-width:350px">Xem
                    Thêm</a>

            </div>
        </div>
    </div>
    <script>

    </script>



    <!-- san pham giam gia-->