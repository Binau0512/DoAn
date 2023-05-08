<?php view('shared.site.header', [
    'title' => 'About'
]); ?>
<style>
    .banner {
        background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
    }
</style>
<!-- Start of banner -->
<section class="banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">About us</h2>
                <span>Home</span> &nbsp;<span>\\</span> &nbsp;<span>About</span>
            </div>

        </div>
    </div>

    <div class="container-fluid banner-share">
        <div class="row">
            <span>Share this page:</span>
            <div class="banner-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </div>

</section>
<!-- End of banner -->


<!-- Start of history -->
<section class="history">
    <div class="container-fluid content-block">

        <ul>
            <li>
                <div class="cupcake-img">
                    <img src="./public/site/img/about/anhabout.png" alt="">
                </div>
            </li>
            <li>
                <div class="intro">
                    <div class="content-title-block">
                        <h2 class="block-title">Snowy là một trong những cửa hàng mỹ phẩm uy tín chính hãng tại Minh Khai - Hà Nội</h2>
                        <p class="block-motto"><span>LỊCH SỬ HÌNH THÀNH PHÁT TRIỂN</span></p>
                    </div>

                    <div class="content">
                        <p>Mới đây các tín đồ làm đẹp lại được 1 phen xôn xao khi Snowy chính thức khai chương 
                            cửa hàng tại khu vực phố Nguyên Xá. Snowy đã “vượt mặt” nhiều đối thủ cạnh tranh và 
                            trở thành cửa hàng được yêu thích nhất với không gian lên đến một trăm mét vuông đầy
                             ắp mỹ phẩm đa dạng từ dưỡng da cho đến trang điểm phải lên đến vài trăm mã hàng.
                            Thiết kế của Snowy luôn có 1 chất rất riêng theo hơi hướng hiện đại, sang trọng, 
                              không gian rộng rãi.  </p>
                        <p>Được thành lập từ năm 2018. Đến nay, Snowy đã phát triển hơn và có tệp khách hàng ổn định. 
                            Giá trị cốt lõi mà Snowy hướng đến là sự tin tưởng của khách hàng
                        </p>
                        <p>Đừng bỏ lỡ cơ hội sở hữu những sản phẩm “đình đám” và hưởng ưu đãi hấp dẫn trong những dịp
                             khuyến mãi của cửa hàng bạn nhé. Để không phải tiếc hùi hụi hãy nhấc máy lên và rủ cô bạn 
                             thân ghé Snowy và trải nghiệm những dịch vụ tuyệt vời ngay nào.</p>

                    </div>

                    <div class="signature">
                        
                        <div>
                            <h6>Trần Thị Duyên</h6> <span> - Chủ cửa hàng</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- End of history -->


<!-- Start of why choose us -->
<section class="why-choose-us p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Tại sao chọn Snowy</p>
            <p class="block-motto"><span>CHẤT LƯỢNG TỐT NHẤT</span></p>
        </div>

        <div class="container content-block">
            <ul id="why-list">
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/payment.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Thanh toán an toàn</h5>
                                    <p>Bảo mật thanh toán</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block left">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/anh3.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Sản phẩm chính hãng</h5>
                                    <p>100% cam kết chính hãng</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </li>


                <li class="list-item">
                    <img src="./public/site/img/home/images/anhnoi-about.png" alt="" with="300px" height="300px">
                </li>
                <li class="list-item">
                    <ul>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/home/whychooseus/free-delivery.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Miễn phí vận chuyển</h5>
                                    <p>Phí vận chuyển hấp dẫn</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-block right">
                                <div class="circle">
                                    <img src="./public/site/img/about/quality.png" alt="">
                                </div>
                                <div class="why-reason">
                                    <h5>Các sản phẩm hot nhất</h5>
                                    <p>Sản phẩm cập nhật liên tục</p>
                                </div>
                            </div>
                        </li>
                    </ul>



                </li>
            </ul>
        </div>
    </div>
</section>

<!-- End of why choose us -->

<!-- Start of Meet our chef -->
<section class="meet p-50">
    <div class="container-fluid section-main">
        <div class="title-block">
            <p class="block-title">Cùng gặp gỡ nhà sáng lập của chúng tôi</p>
            <p class="block-motto"><span>S N O W Y</span></p>
        </div>

        <div class="container-fluid" style="margin-top: 40px;">
            <div class="content-block">
                <ul id="chef-list">


                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/hieu.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Trần Trung Hiếu</h5>
                                <p>What must be, must be</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/profile.php?id=100072150316171"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/hoaxinhdep.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Hòa co-founder</h5>
                                <p>Đen thôi, đỏ là Red</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/hoa.met.73/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/duyen.jpg" alt="" style=" border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Trần Thị Duyên</h5>
                                <p>Độc thân chờ người đến tán</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/profile.php?id=100009252694634"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li>

                    <!-- <li>
                        <div class="chef-block">
                            <div class="chef-img">
                                <img src="./public/site/img/about/phuc.png" alt="" style="background: lightblue; border-radius: 100%">
                            </div>
                            <div class="chef-info">
                                <h5>Phuc Nguyen</h5>
                                <p>Eat . Live . Pray</p>
                            </div>
                            <div class="chef-social">
                                <a href="https://www.facebook.com/manhphuc.nguyen.5/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </li> -->
                </ul>

            </div>
        </div>
    </div>
</section>
<!-- End of Meet our founder -->


<section class="bottom-banner">
    <!-- <img src="./public/site/img/about/logo-banner.png" alt=""> -->
</section>

<?php view('shared.site.footer'); ?>