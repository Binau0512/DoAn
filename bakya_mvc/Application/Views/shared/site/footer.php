<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a><img src="./public/site/img/home/logo/logo.png" alt="" style="width: 111px; height: 111px;"></a>
                    </div>
                    <!-- <p>ThemeMu comes with powerful theme options, which empowers you to quickly and easily build
                        incredible stores.</p> -->
                    <div class="footer__social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h5>Liên hệ</h5>
                    <ul id="contact-list">
                        <li><span><i class="fas fa-map-marker-alt"></i>Địa chỉ:</span><span> 39B phố Nguyên Xá Minh Khai Bắc Từ Liêm Hà Nội</span></li>
                        <li><span><i class="fas fa-phone-alt"></i>Số điện thoại:</span><span>(+84) 153 8591</span></li>
                        <li><span><i class="far fa-envelope"></i>Email:</span><span>snowy@support.com</span></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h5>Bài viết gần đây</h5>
                    <ul id="recent-post-list">
                        <li>
                            <div><img src="./public/site/img/home/footer/anh1.jpg" alt=""></div>
                            <div>
                                <p>Kem chống nắng mỏng nhẹ cho mùa hè</p>
                                <br>
                                <span>Apr 20, 2023</span>
                            </div>
                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh2.jpg" alt=""></div>
                            <div>
                                <p>Kem chống nắng mỏng nhẹ cho mùa hè</p>
                                <br>
                                <span>Match 10, 2023</span>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h5>Hình ảnh trên Facebook</h5>
                    <ul id="insta-list">
                        <li>
                            <div><img src="./public/site/img/home/footer/anh3.webp" alt=""></div>

                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh4.jpg" alt=""></div>

                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh5.jpg" alt=""></div>

                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh6.jpg" alt=""></div>

                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh7.jpg" alt=""></div>

                        </li>
                        <li>
                            <div><img src="./public/site/img/home/footer/anh8.jpg" alt=""></div>

                        </li>


                        <!-- <li><a href="#">Orders Tracking</a></li> -->
                    </ul>
                </div>
            </div>

        </div>

        <hr>

        <div class="footer__newsletter">
            <ul>
                <li>
                    <div class="footer__newsletter__text">
                        <span>Nhập email của bạn để theo dõi chúng tôi</span><br>
                        <h5>Nhận tin mới nhất</h5>
                    </div>
                </li>

                <li>
                    <form action="#">
                        <input type="text" placeholder="Nhập email của bạn">

                        <button type="submit" class="site-btn">Gửi</button>

                    </form>
                </li>
            </ul>

        </div>



    </div>


    <!-- <div class="container-fluid">
        <div class="row copyright">
            <div class="col-md-12 p-0">
                <div class=" footer__copyright__text">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This
                        template is made by The One
                    </p>
                </div>
            </div>
        </div>
    </div> -->



</footer>
<!-- Footer Section End -->

</body>

<script src="./public/site/js/searchAjax.js" type="text/javascript"></script>
<script src="./public/site/js/cartAjax.js" type="text/javascript"></script>
<script src="./public/site/js/validate.js" type="text/javascript"></script>
<script src="./public/site/js/countdown.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active-slide", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active-slide";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>


</html>