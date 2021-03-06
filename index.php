<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/js.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <div class="menu">
        <nav id='cssmenu'>
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <div id="head-mobile">
            </div>
            <div class="button">
            </div>
            <ul class="nav-menu slideInRight" id="menu-header">
                <li class='active'>
                    <a href='#'>Trang Chủ</a>
                </li>
                <li>
                    <a href='#'>Dự án giải trí</a>
                    <ul>
                        <li>
                            <a href='#'>Khu vui chơi giải trí</a>
                        </li>
                        <li>
                            <a href='#'>Thiết kế</a>
                        </li>
                        <li>
                            <a href='#'>Thi công nghệ thuật</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href='#'>Sự Kiện</a>
                </li>
                <li>
                    <a href='#'>Giới thiệu</a>
                </li>
                <li>
                    <a href='#'>Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <section class="video">

    </section>
    <section class="service">
        <div class="info">
            <h4 class="title">
                OKULELE
            </h4>
            <img src="images/service-img.png" alt="">
            <div class="content">
                <p>
                    Dịch vụ tư vấn cho các khu du lịch & giải trí về quy hoạch và cải tạo
                </p>
                <p>
                    Phát triển các trò chơi mang tính sáng tạo đột phá & nhân văn sâu sắc
                </p>
            </div>
        </div>
        <div class="slider">
            <div class="swiper-container swiper-container-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide image-slider" style="background: url('images/slider_1.png') no-repeat;">
                        <div class="info-slider">
                            <p class="title">
                                <span>
                                    OKUL PLAYZONE
                                </span>
                            </p>
                            <div class="content">
                                <p class="description">
                                    Ở khu vận động các bé còn học được văn hoá xếp hàng, tinh thần đồng đội và ý chí.
                                </p>
                                <button class="btn btn-img">
                                    Hình Ảnh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="caption slider">
        <div class="slider" id="slider-comment">
            <div class="content-caption slide-image active">
                <p class="hedaer">
                    "
                </p>
                <p class="content">
                    asdfafasdfasdf
                </p>
                <p class="author">
                    Bui Hoang Minh
                </p>
            </div>
            <div class="content-caption slide-image">
                <p class="hedaer">
                    "
                </p>
                <p class="content">
                    định vị mình là đơn vị tư vấn về thương hiệu và giải pháp cho các khuôn viên giải trí như công
                    viên, bãi biển du lịch và trung tâm thương mại
                </p>
                <p class="author">
                    Bui Hoang Minh
                </p>
            </div>
            <div class="content-caption slide-image">
                <p class="hedaer">
                    "
                </p>
                <p class="content">
                    sdfgsdfg
                    định vị mình là đơn vị tư vấn về thương hiệu và giải pháp cho các khuôn viên giải trí như công
                    viên, bãi biển du lịch và trung tâm thương mại
                </p>
                <p class="author">
                    Bui Hoang Minh
                </p>
            </div>

            <div class="button-next" onclick="switchSlide('next')">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </div>
            <div class="button-prev" onclick="switchSlide('prev')">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </div>
        </div>
    </section>
    <section class="event">
        <div class="info-event">
            <p class="title">
                Sự kiện
            </p>
            <p class="image-event">
                <img src="images/icon-event.png" alt="">
            </p>
            <p class="content">
                Những khoảnh khắc không thể nào quênNhững khoảnh khắc không thể nào quên
            </p>
            
            <button class="btn btn-event">
                Khám Phá
            </button>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="copy-right">
        <div class="logo">
            <img src="images/logo-white.png" alt="">
        </div>
        <div class="icon">
            <a href="#">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#">
                <i class="fa fa-pinterest-p"></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
        <div class="copy">
            <span>&copy 2017 OKULELE</span>
            <span> ENTERTAINMENT</span>
        </div>
        <div class="company">
            <span>Công Ty TNHH Truyền Thông & Giải Trí OKULELE</span>
        </div>
    </div>
    <div class="contact">
        <p>SDT: 090 345 3377</p>
        <p>Hoặc 0120 565 5556</p>
        <p>contact@okulele.vn</p>
        <p class="address">   
            175 Tô Hiến Thành P.13, Q.10, Tp. HCM
        </p>
    </div>
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.433884503136!2d106.66353054998771!3d10.778042992282703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edadc93c81f%3A0xd45c93e12d4a0848!2zMTc1IFTDtCBIaeG6v24gVGjDoG5oLCBDxrAgeMOhIELhuq9jIEjhuqNpLCBQaMaw4budbmcgMTMsIFF14bqtbiAxMCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1494251812720" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</footer>
</body>
</html>