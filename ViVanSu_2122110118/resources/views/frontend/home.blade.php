@extends('layouts.site')
@section('title', 'Home')
@section('content')
    <section class="slider_section">
        <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner2.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                                <strong class="yellow_bold">Product </strong>
                            </h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href="#">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                                <strong class="yellow_bold">Product </strong>
                            </h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href="#">see more Products</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner2.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                                <strong class="yellow_bold">Product </strong>
                            </h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href="#">see more Products</a>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-left'></i>
            </a>

        </div>

    </section>



    <!-- CHOOSE  -->
    <div class="whyschose">
        <div class="container">

            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="title">
                        <h2>Why <strong class="black">choose us</strong></h2>
                        <span>Fastest repair service with best price!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose_bg">
        <div class="container">
            <div class="white_bg">
                <div class="row">
                    <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="icon/1.png" /></i>
                            <h3>Data recovery</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="icon/2.png" /></i>
                            <h3>Computer repair</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="icon/3.png" /></i>
                            <h3>Mobile service</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for_box">
                            <i><img src="icon/4.png" /></i>
                            <h3>Network solutions</h3>
                            <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                        </div>
                    </dir>
                    <div class="col-md-12">
                        <a class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end CHOOSE -->

    <!-- service -->
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>Service <strong class="black">Process</strong></h2>
                        <span>Easy and effective way to get your device repair</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service1.png" /></i>
                        <h3>Fast service</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service2.png" /></i>
                        <h3>Secure payments</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service3.png" /></i>
                        <h3>Expert team</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service4.png" /></i>
                        <h3>Affordable services</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service5.png" /></i>
                        <h3>90 Days warranty</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service6.png" /></i>
                        <h3>Award winning</h3>
                        <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->

    <!-- our product -->
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>our <strong class="black">products</strong></h2>
                        <span>We package the products with best services to make you a happy customer.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p1.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p2.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p3.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p4.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p5.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p2.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p6.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <i><img src="icon/p7.png" /></i>
                            <h3>Norton Internet Security</h3>
                            <span>$25.00</span>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <div class="Clients_bg_white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h3>What Clients Say?</h3>
                        </div>
                    </div>
                </div>
                <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#client_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#client_slider" data-slide-to="1"></li>
                        <li data-target="#client_slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="images/lllll.png" /><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>

                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="images/lllll.png" /><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>
                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text-bg">
                                    <div class="img_bg">
                                        <i><img src="images/lllll.png" /><span>Jone Due<br><strong
                                                    class="date">12/02/2019</strong></span></i>

                                    </div>
                                    <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am really satisfied with my
                                        first laptop service.<br>
                                        You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                        free! I wish I would have thought of it first. I am </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="yellow_bg">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                        <div class="yellow-box">
                            <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png" /></i></h3>

                            <p>Get answers and advice from people you want it from.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div class="yellow-box">
                            <a href="#">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end our product -->
    <!-- map -->
    <div class="container-fluid padi">
        <div class="map">
            <img src="images/mapimg.jpg" alt="img" />
        </div>
    </div>
    <!-- end map -->
    <!--  footer -->




    <footr>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <ul class="sociel">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>conatct us</h3>
                            <span>123 Second Street Fifth Avenue,<br>
                                Manhattan, New York<br>
                                +987 654 3210</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="lik">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#">Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>service</h3>
                            <ul class="lik">
                                <li> <a href="#"> Data recovery</a></li>
                                <li> <a href="#">Computer repair</a></li>
                                <li> <a href="#">Mobile service</a></li>
                                <li> <a href="#">Network solutions</a></li>
                                <li> <a href="#">Technical support</a></li>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>About lighten</h3>
                            <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a>
                    Distributed By <a href="https://themewagon.com">ThemeWagon </a></p>
            </div>

        </div>
    </footr>

@endsection
