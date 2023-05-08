<main>
    <!-- Start of main banner -->
    <section class="banner container-fluid p-0">
        <div class="banner-frame row m-0 p-0">
            <div class="bannercontainer">
                <img src="./public/uploads/<?= $banners[0]['image'] ?>" alt="" class="col-md-12 m-0 p-0 bread-img">
                <!-- <div class="overlay"></div>
                <div class="bannertitle">
                    <img src="./public/site/img/home/wheat1.png" alt="" class="wheat-img">
                    <p id="motto">FRESHLY BAKED BREAD</p>
                    <h6>MADE WITH THE LOVE OF THE BEST BAKERS</h6>
                </div> -->
            </div>
        </div>
    </section>

    <section class="quickshopping">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Các danh mục Hot nhất</p>
                <p class="block-motto"><span>MUA NGAY</span></p>
            </div>

            <div class="container" style="margin-top: 40px;">
                <div class="content-block">
                    <ul id='quick-shop-list'>
                        <li>

                            <div class="bread-desc">
                                <h3>Sữa tắm</h3>
                                <p>Đừng quên chăm sóc làn da body của mình bạn nhé
                                </p>
                                <a href="./?controller=product&action=allProducts"><button><span>MUA NGAY</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/anh1.png" alt="">
                                </div>
                            </div>

                        </li>

                        <li>

                            <div class="bread-desc">
                                <h3>Chống nắng</h3>
                                <p>Nghiên cứu cho thấy nếu bạn không chống nắng thì mọi bước dưỡng da đều vô ích.</p>
                                <a href="./?controller=product&action=allProducts"><button><span>MUA NGAY</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/anh3.png" alt="">
                                </div>
                            </div>

                        </li>

                        <li>

                            <div class="bread-desc">
                                <h3>Trang điểm</h3>
                                <p>Những sản phẩm makup mới nhất đã đổ bộ nhà Snowy. CÙng xem có gì mới nào</p>
                                <a href="./?controller=product&action=allProducts"><button><span>MUA NGAY</span><img src="./public/site/img/home/logo/right.png" alt=""></button></a>
                                <div class="basket">
                                    <img src="./public/site/img/home/images/anh-son-3ce.png" alt="">
                                </div>
                            </div>
                            <!-- <div class="trapezoid">
                                    <div class="basket">
                                        <img src="./public/site/img/home/images/basket1.png" alt="">
                                    </div>
                                </div> -->

                        </li>
                    </ul>
                </div>


            </div>
        </div>


    </section>
    <!-- Start of why choose us -->
    <section class="why-choose-us p-50">
        <div class="container-fluid section-main">
            <div class="title-block">
                <p class="block-title">Tại sao nên chọn Snowy</p>
                <p class="block-motto"><span>CHẤT LƯỢNG TUYỆT VỜI</span></p>
            </div>

            <div class="container content-block">
                <ul id="why-list">
                    <li>
                        <div class="why-block">
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
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/anh3.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5> Sản phẩm chính hãng</h5>
                                <p> 100% cam kết chính hãng</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/24-hours-support.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>Chăm sóc khách hàng</h5>
                                <p>Dịch vụ hỗ trợ 24/7</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="why-block">
                            <div class="circle">
                                <img src="./public/site/img/home/whychooseus/free-delivery.png" alt="">
                            </div>
                            <div class="why-reason">
                                <h5>Miễn phí vận chuyển</h5>
                                <p>Phí vận chuyển hấp dẫn</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of why choose us -->

    <!-- Start of promotion -->
    <section class="promotion">
        <div class="promotion-block container-fluid content-block">
            <ul>
                <li class="offer-image">
                    <div class="imgcontainer">
                        <img src="./public/uploads/<?= $offer_pro['image'] ?>" alt="">
                    </div>
                </li>
                <li class="offer-info">
                    <div>
                        <p class="block-title">Sản phẩm bán chạy nhất!</p>
                        <!-- <p class="offer-deal">
                            GIẢM TỚI <span style="font-weight: bold"><?= $offer_pro['percent'] ?></span>% GIÁ TRỊ SẢN PHẨM
                        </p> -->

                        <h3><?= $offer_pro['name'] ?></h3>
                        <h5 class="offer-price"><span><?= number_format($offer_pro['price'], 0, ',', '.') ?></span> vnđ</h5>

                        <p class="p-lorem"> </p>

                        <!-- <div class="countdown" data-date="2021-12-28" data-time="12:00"></div> -->

                        <a class="offer-btn btn-root ptc-btn border-root" style="margin-top: 15px; position: absolute" href="./?controller=product&action=productDetail&id=<?= $offer_pro['id'] ?>">
                            MUA NGAY
                        </a>

                    </div>





                </li>

            </ul>

        </div>
    </section>
    <!-- End of promotion -->

    <!-- Start of latest products -->
    <section class="latest-products p-50">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Những sản phẩm mới nhất</p>
                <p class="block-motto"><span>OUR BEST PRODUCTS</span></p>
            </div>

            <div class="container">

                <ul class="pro-category">
                    <?php foreach ($categories as $cat) : ?>
                        <li><a href="./?controller=product&action=allProducts&id=<?= $cat['id'] ?>">
                                <h5><?= $cat['name'] ?></h5>
                            </a></li>

                        <p>/</p>
                    <?php endforeach; ?>

                </ul>

                <div class="content-block">
                    <ul id='pro-list'>
                        <?php foreach ($latest_products8 as $product) : ?>
                            <li class="col-lg-3 col-sm-3 col-12">
                                <a href="./?controller=product&action=productDetail&id=<?= $product['id'] ?>">
                                    <div class="pro-block">
                                        <div class="pro-img">
                                            <?php
                                            $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                            ?>
                                            <img src="./public/uploads/<?= $productImage; ?>" alt="<?= $product['name']; ?>">
                                        </div>
                                        <div class="pro-info">
                                            <h5><?= $product['name'] ?? '' ?></h5>
                                            <h5><?= number_format($product['sale_price'] > 0 ? $product['sale_price'] : $product['price'], 0, ',', '.') ?> vnđ
                                            </h5>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End of latest products -->


    <section class="cookie-banner">

        <img src="./public/uploads/<?= $banners[1]['image'] ?>" alt="">

    </section>

    <!-- Start of product for you -->
    <section class="product-for-you p-50">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Dành cho bạn</p>
                <p class="block-motto"><span>SẢN PHẨM MỚI</span></p>
            </div>

            <div class="container" style="margin-top: 40px;">

                <div class="content-block">
                    <div id="add-product-to-cart-ajax" style="margin: 0 auto 20px auto; width: 90%"></div>
                    <ul id='new-pro-list'>
                        <!-- <input type="text" id="success-message"> -->
                        <?php foreach ($latest_products4 as $product) : ?>
                            <li>
                                <a href="./?controller=product&action=productDetail&id=<?= $product['id'] ?>">
                                    <div class="new-pro-block">
                                        <div class="new-pro-img">
                                            <?php
                                            $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                            ?>
                                            <img src="./public/uploads/<?= $productImage; ?>" alt="<?= $product['name']; ?>">
                                        </div>
                                        <div class="new-pro-info">
                                            <h5 class="text-dark" style="color: black"> <?= $product['name'] ?? '' ?> </h5>
                                            <p><?= $product['description'] ?> </p> 
                                            <h5><?= number_format($product['sale_price'] > 0 ? $product['sale_price'] : $product['price'], 0, ',', '.') ?> vnđ
                                            </h5>
                                        </div>
                                        <a id="add-to-cart-btn<?= $product['id'] ?>" class="swalDefaultSuccess " onclick="onAddToCartAjax(<?= $product['id'] ?>)">
                                            <button><i class="fas fa-shopping-basket" style="font-size:13px"></i><span> THÊM VÀO GIỎ</span></button>
                                        </a>

                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End of profuct for you -->

    <!-- Start of testimonial -->
    <section class="testimonial">
        <div class="container-fluid section-main">
            <div class="content-title-block">
                <p class="block-title">Khách hàng của Snowy nói gì?</p>
                <p class="block-motto"><span>COMMENT</span></p>
            </div>
            <div class="container">
                <div class="carousel-inner" id="testimonial-list" role="listbox">
                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Sản phẩm uy tín chính hãng, rất tin tưởng cửa hàng, sẽ mua lại lần sau.
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Thảo Ly Nguyễn </h5>
                                <span id="job"> Nhân viên văn phòng </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/anh1.jpg">
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Mình đã đến cửa hàng để xem tận mắt các sản phẩm. Không gian rất sạch sẽ và có đầy đủ giấy tờ nhé, rất an tâm
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Hằng Nguyễn </h5>
                                <span id="job"> Sinh viên </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/anh2.jpg ">
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade testimonial-item">
                        <div class="testimonial-block">

                            <div class="customer-info">
                                <img src="./public/site/img/home/customer/testimonial.png">
                                <p> Mình từng mua ở cửa hàng khác vì rẻ nhưng dính hàng giả, sợ đến già. Giờ lại quay về trung thành với Snowy thôi!!!
                                    <br>
                                </p>
                                <span id="star-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                <h5> Trần An </h5>
                                <span id="job"> Giáo viên </span>
                            </div>
                            <div class="customer-img">
                                <img src=" ./public/site/img/home/customer/anh3.jpg ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>
    </section>
    <!-- End of testimonial -->

    <section class="bottom-banner">
        <!-- <img src="./public/site/img/about/logo-banner.png" alt=""> -->
    </section>
</main>