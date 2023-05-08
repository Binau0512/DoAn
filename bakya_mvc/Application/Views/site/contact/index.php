<?php view('shared.site.header', [
    'title' => 'Contact'
]); ?>
<style>
    .contact-banner {
        background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
    }
</style>
<section class="banner contact-banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">Contact</h2>
                <span>Home</span> &nbsp;<span>\\</span> &nbsp;<span>Contact</span>
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


<section class="contact p-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h2>Thông tin liên hệ</h2>
                    <p class="contact-loc-desc">
                        Nếu bạn gặp bất cứ khó khăn nào về việc mua sản phẩm, hãy liên hệ với chúng tôi. Snowy có đội ngũ hỗ trợ khách hàng cực kỳ có tâm và có tầm.
                    </p>

                    <div class="contact-detail">
                        <ul>
                            <li>
                                <div class="contact-detail-block">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                    <div class="contact-info">
                                        <h4>Địa chỉ</h4>
                                        <p>39B phố Nguyên Xá Minh Khai Bắc Từ Liêm Hà Nội</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-detail-block">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>

                                    <div class="contact-info">
                                        <h4>Số điện thoại</h4>
                                        <div class="hotline">
                                            <span style="vertical-align: top;">Hotline: </span>
                                            <p class="phone">(+84) 325 2548
                                                <br>(+84) 999 1236
                                            </p>
                                        </div>
                                        <p>Điện thoại: <span class="phone">(+84) 123 9995</span></p>


                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-detail-block">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div class="contact-info">
                                        <h4>Email</h4>
                                        <p>snowy@support.com</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-block">
                    <h2>Form liên hệ</h2>
                    <form method="POST" name="contactForm" class="contact-form" action="./?controller=contact&action=submitForm" onsubmit="return validateContactForm();">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name *" id="ct-name" onkeyup="validateName(this, 'Name')" value="<?= !empty($_SESSION['user']) ? $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname'] : ''  ?>">
                            <small id="ct-name-err"></small>

                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email address *" id="ct-email" onkeyup="validateEmail(this)" value="<?= !empty($_SESSION['user']) ? $_SESSION['user']['email'] : ''  ?>">
                            <small id="ct-email-err"></small>

                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone number *" id="ct-phone" onkeyup="validatePhone(this)" value="<?= !empty($_SESSION['user']) ? $_SESSION['user']['phone'] : ''  ?>">
                            <small id="ct-phone-err"></small>

                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message *" id="ct-msg" onkeyup="validateLength(this, 'Message', 500)"></textarea>
                            <small id="ct-msg-err"></small>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="send-mess-btn" id="send-msg-btn">Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<app-map></app-map>

<section class="bottom-banner">
    <!-- <img src="assets/img/about/logo-banner.png" alt=""> -->
</section>
<?php view('shared.site.footer') ?>