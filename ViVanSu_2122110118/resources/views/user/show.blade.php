<!DOCTYPE html>
<html>

<head>
    <title>sport</title>
    <link rel="stylesheet" type="text/css" href="styles.css">


</head>

<body>
    <header>
        <h1>SPORT STORE</h1>
    </header>

    <nav>
        <ul>
            <!-- <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">gio hang</a></li>
            <li><a href="#">dang ky</a></li> -->
            <nav>
                <ul>
                    <li><a href="#" onclick="navigateTo('index.html')">Trang chủ</a></li>
                    <li><a href="#" onclick="navigateTo('product.html')">Sản phẩm</a></li>
                    <li><a href="#" onclick="navigateTo('contact.html')">liên hệ</a></li>
                    <li><a href="#" onclick="navigateTo('product_detail.html')">chi tiết sản phẩm</a></li>
                    <li><a href="#" onclick="navigateTo('register.html')">đăng ký</a></li>
                </ul>
            </nav>

            <script>
                function navigateTo(page) {
                    window.location.href = page;
                }
            </script>
            <div class="search">
                <form>
                    <input type="text" placeholder="Tìm kiếm">
                    <input type="submit" value="Tìm kiếm">
                </form>
            </div>
        </ul>
    </nav>

    <section id="google-map">
        <h2>Bản đồ Google</h2>
        <div id="map">
            <label for="message">hãy tìm vị trí bạn muốn tìm:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Gửi</button>
        </div>
    </section>
    <section id="contact-info">
        <h2>Thông tin liên hệ</h2>
        <ul class="contact-details">
            <li><i class="fa fa-map-marker"></i> Địa chỉ: tăng nhơn phú, Thành phố Hồ Chí Minh</li>
            <li><i class="fa fa-phone"></i> Điện thoại: 0123456789</li>
            <li><i class="fa fa-envelope"></i> Email: vivansu2003@gmail.com</li>
        </ul>
    </section>
    <section id="contact-form">
        <h2>Liên hệ với chúng tôi</h2>
        <form>
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Nội dung:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Gửi</button>
        </form>
    </section>


    <footer class="footer">
        <div class="grid wide footer-container">
            <div class="row">
                <div class="col l-3 m-6 c-12">
                    <div class="footer-item">
                        <div class="footer-item__name">
                            <div class="footer-logo">

                                <span class="footer-logo__name">SPORT</span>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col l-3 m-6 c-12">
                    <div class="footer-item">
                        <div class="footer-item__name">
                            <h4>CONTACT INFO</h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                Copyright © 2021 By <a href="" class="footer-copyright__link">vi van su</a>
            </div>
        </div>
    </footer>
</body>

</html>
