<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
</head>

<body>
    <header>
        <nav class="menu">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul class="menu-items">
                <li class="active"> <a href="{{ url('/') }}">Home</a>
                </li>

                <li> <a href="{{ url('/san-pham') }}">product</a> </li>
                <li> <a href="{{ url('/chi-tiet-san-pham/@producSlug') }}">
                        chitietsanpham</a>
                </li>
                <li> <a href="{{ url('/lien-he') }}">Contact</a> </li>

            </ul>
            <div class="user-actions">
                <a href="#">Đăng nhập</a>
                <a href="#">Giỏ hàng</a>
                <form class="search-form" action="#" method="GET">
                    <input type="text" name="search" placeholder="Tìm kiếm...">
                    <button type="submit">Tìm</button>
                </form>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>



    <footer class="footer">
        <div class="footer-info">
            <p>Địa chỉ: 67,đường 1 Đỗ xuân hợp,
                Thành phố Thủ Đức ,Thành Phố Hồ Chí Mnh</p>
            <p>Điện thoại: 0383734783</p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/your-facebook-page" target="_blank"><i class="fab fa-facebook"><img
                        src="images/fb.png" alt=""></i>fb</a>
            <a href="https://www.instagram.com/your-instagram-page" target="_blank"><i class="fab fa-instagram"><img
                        src="images/inta.png" alt=""></i>in</a>
            <a href="https://zalo.me/your-zalo-page" target="_blank"><i class="fab fa-zalo"><img src="images/zalo.png"
                        alt=""></i>zalo</a>
        </div>
    </footer>
</body>

</html>
