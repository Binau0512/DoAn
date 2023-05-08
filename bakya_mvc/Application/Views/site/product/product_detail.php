<?php view('shared.site.header', [
    'title' => 'Product Detail'
]);
// select * from product where id = num
// thi nhung gia tri ben duoi se dc gan product-detail.php?id=1 // ? means GET truyen tham so id xuong
?>
<style>
.product-detail-banner {
    background-image: url("./public/uploads/<?= $banners[0]['image'] ?>");
}
</style>
<section class="banner product-detail-banner">
    <div class="container-fluid banner-title">
        <div class="row">
            <div class="col-md-12">
                <h2 id="motto">Product detail</h2>
                <span>Home</span> &nbsp;<span>\\</span> &nbsp;<span>Product</span>
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


<section class="product-details p-50">
    <div class="container">
        <?php if (!empty($success['add_to_cart_quantity'])) { ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-warning" id="success-add-to-cart">
                    <button onclick="document.getElementById('success-add-to-cart').style.display='none'" type="button"
                        class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $success['add_to_cart_quantity'] ?? '' ?>
                </div>
            </div>
        </div>

        <?php } ?>
        <div class="row">


            <div class="col-md-6">
                <div class="product__details__pic">

                    <div class="product-detail-big-pic">
                        <img src="./public/uploads/<?= $pro["image"] ?>" alt="">
                    </div>
                    <div id="carouselId" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item active">
                                <!-- <div class="d-none d-lg-block">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-8.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-9.png"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-10.png"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-11.png"
                                            alt="First slide">
                                    </div>
                                </div> -->
                                <div class="d-none d-md-block d-lg-none">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-8.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-9.png"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-10.png"
                                            alt="First slide">

                                    </div>
                                </div>
                                <div class="d-none d-sm-block d-md-none">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-8.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-9.png"
                                            alt="First slide">
                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                    <img class="product-img-item" src="./public/uploads/bread-8.jpg" alt="First slide">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-none d-lg-block">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-2.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-3.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-12.png"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-7.jpg"
                                            alt="First slide">
                                    </div>
                                </div>
                                <div class="d-none d-md-block d-lg-none">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-8.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-2.jpg"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-3.jpg"
                                            alt="First slide">


                                    </div>
                                </div>
                                <div class="d-none d-sm-block d-md-none">
                                    <div class="slide-box">
                                        <img class="product-img-item" src="./public/uploads/bread-10.png"
                                            alt="First slide">
                                        <img class="product-img-item" src="./public/uploads/bread-8.jpg"
                                            alt="First slide">

                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                    <img class="product-img-item" src="./public/uploads/bread-9.png" alt="First slide">

                                </div>
                            </div>


                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <i class="ti ti-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <i class="ti ti-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>

            </div>


            <div class="col-md-6">
                <div class="product__details__text">
                    <h2 style="margin-bottom: 1rem"><?= $pro["name"] ?></h2>
                    <div class="rating">
                        <span>Đánh giá:</span><span style="color: #ffc107">
                            <?= round($avg['rating'], 1) ?>/5</span>
                        <span id="customer-review-no"> <?= sizeof($reviews) ?> nhận xét</span>


                        <?php if ($pro['sale_price'] < $pro['price'] && $pro['sale_price'] > 0) : ?>
                        <h3 class="product__details__price"><?= number_format($pro["sale_price"], 0, ',', '.') ?> vnđ&nbsp;
                            <span class="strikeout"
                                style="font-size:1.2rem"><?= number_format($pro["price"], 0, ',', '.') ?> vnđ</span>
                            <span style="font-size: 0.8rem"
                                class="badge badge-success">-<?= round((1 - ($pro['sale_price'] / $pro['price'])) * 100, 1) ?>%</span>
                        </h3>
                        <?php else : ?>
                        <h3 class="product__details__price"><?= number_format($pro["price"], 0, ',', '.') ?> vnđ</h3>
                        <?php endif; ?>


                    </div>

                    <p class="p-desc"><?= $pro["description"] ?></p>


                    <ul class="pro-info-list">
                        <li><span>Xuất xứ: </span><?= strtoupper($pro["origin"]) ?></li>
                        <?php if($pro["quantity"] != 0) : ?>
                        <li><span>Tình trạng: </span>Còn hàng</li>
                        <li><span>Số lượng: </span><?= $pro["quantity"] ?></li>
                        <?php else : ?>
                        <li><span>Tình trạng: </span>Hết hàng</li>
                        <?php endif; ?>
                        <li><span>Mã sản phẩm: </span> SNOWY<?= $pro["id"] ?>
                        </li>
                        <input type="hidden"  value="<?=  $pro["quantity"] ?>" id="product_quantity"/>
                        <!-- <li><span>Brand: </span>Bakya</li> -->
                    </ul>
                    <div class="product__details__button">
                        <form action="./?controller=cart&action=addQuantity&id=<?= $pro['id'] ?>" method="POST"
                            class="add-quantity-form" style="display : flex">
                            <div class="pro-qty">
                                <div style="display:flex">
                                <div class="dec qtybtn" onclick="decrease(<?= $pro['id'] ?>)"><i
                                        class="ti ti-minus"></i></div>
                                <input type="number" value="1" id="<?= $pro['id'] ?>quantity" name="more" min="1" class="buy_product">
                                <div class="inc qtybtn" onclick="increase(<?= $pro['id'] ?>)"><i class="ti ti-plus"></i>
                                </div></div>
                            <span class="text-danger error-quantity" style="color: red"></span>
                                
                            </div>

                            <a class="add-to-cart-pro-detail"><button type="submit" id="buy"><i class="fas fa-shopping-basket"
                                        style="font-size:13px"></i><span>Thêm vào giỏ</span></button></a>
                        </form>
                    </div>

                    <div class="product__details__more">
                        <!-- <div class="tag"> <span class="more-title">Tag: </span>
                            <ul>
                                <li><a href="#">Lemon</a><span> ,</span></li>
                                <li><a href="#">bakery</a><span> ,</span></li>
                                <li><a href="#">cake</a><span> ,</span></li>
                                <li><a href="#">america</a></li>
                            </ul>
                        </div> -->
                        <div class="category"> <span class="more-title">Danh mục: </span>
                            <ul>
                                <li><a href="#"><?= $cat['name'] ?></a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-lg-12">
                <div class="product__details__tab p-50">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  active desc-tab" id="desc-tab" data-toggle="tab" href="#tabs-1"
                                role="tab"
                                onclick="document.getElementById('rev-tab').classList.remove('active');this.classList.add('active') ;document.getElementById('tabs-1').classList.add('active');document.getElementById('tabs-2').classList.remove('active')">Mô tả</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link rev-tab" id="rev-tab" data-toggle="tab" href="#tabs-2" role="tab"
                                onclick="document.getElementById('desc-tab').classList.remove('active');this.classList.add('active');document.getElementById('tabs-1').classList.remove('active');document.getElementById('tabs-2').classList.add('active')">
                                Đánh giá (<?= sizeof($reviews) ?>)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  active" id="tabs-1" role="tabpanel">
                            <h5><?= $pro["name"] ?></h5>

                            <p><b><?= $pro["description"] ?></b></p>



                        </div>

                        <div class="tab-pane " id="tabs-2" role="tabpanel">
                            <ul id="rev-list">

                                <?php foreach ($reviews as $review) : ?>
                                <li>
                                    <div class="rev-block">
                                        <div class="rev-img">
                                            <img style="width: 70px; height:70px" src="./public/site/img/user.png"
                                                alt="">
                                        </div>
                                        <div class="rev-content">
                                            <div class="rev-info">
                                                <h5><?= $review['fname'] . ' ' . $review['lname'] ?></h5>
                                                <p class="rev-date"><?= $review['created_at'] ?></p>
                                                <?php if (!empty($_SESSION['user'])) : ?>
                                                <?php if ($_SESSION['user']['id'] == $review['account_id']) : ?>
                                                <a class="rev-delete" title="Remove review"
                                                    href="./?controller=product&action=removeReview&id=<?= $review['id'] ?>&productId=<?= $review['product_id'] ?>"
                                                    onclick="return confirm('Are you sure to delete this review ?')">Delete</a>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                                <span class="rev-rating">
                                                    <?php for ($i = 0; $i < $review['rating']; $i++) {
                                                        ?>
                                                    <i class="fa fa-star"></i>
                                                    <?php   }
                                                        ?>

                                                </span>

                                            </div>

                                            <p class="rev-detail">
                                                <?= htmlentities($review['content']) ?>
                                            </p>
                                        </div>

                                    </div>
                                </li>
                                <hr>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (empty($_SESSION['user']) || $user['status'] == 0) : ?>
                            <div class="error-block" style="padding: 0 5% ">

                                <h2>Vui lòng đăng nhập để đánh giá</h2>
                                <p>Nếu bạn có tài khoản. Click <a> <button class="login-modal p-0"
                                            style="font-family: inherit; width:unset"
                                            onclick="document.getElementById('id01').style.display='block'"
                                            style="width:auto;">here</button>
                                    </a> để đăng nhập
                                </p>
                                <p>Nếu bạn chưa có tài khoản. Đăng nhập <a> <button class="login-modal p-0"
                                            style="font-family: inherit; width:unset"
                                            onclick="document.getElementById('id02').style.display='block'"
                                            style="width:auto;">tại đây</button>
                                    </a>
                                </p>
                                <div class="img-container">
                                    <img src="./public/site/img/home/images/405.jpg" alt="">
                                </div>


                            </div>
                            <?php else : ?>
                            <div class="rev-form">
                                <h4>Thêm một nhận xét</h4>
                                <p id="notice">
                                    Địa chỉ Email của bạn sẽ không bị lộ. Các trường bắt buộc được đánh dấu <span
                                        class="asterisk">*</span>
                                </p>

                                <form method="POST" class="review-form"
                                    action="./?controller=product&action=review&id=<?= $pro['id'] ?>"
                                    name="reviewProductForm" onsubmit="return validateReviewProductForm();">

                                    <label for="stars" style="width: 13%;padding-right: 20px;">
                                        Đánh giá <span class="asterisk">*</span>
                                    </label>
                                    <div class="rating">
                                        <label class="rate-label">
                                            <input type="radio" value="1" name="rating" />
                                            <i class="fa fa-star icon"></i>
                                        </label>
                                        <label class="rate-label">
                                            <input type="radio" value="2" name="rating" />
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                        </label>
                                        <label class="rate-label">
                                            <input type="radio" value="3" name="rating" />
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                        </label>
                                        <label class="rate-label">
                                            <input type="radio" value="4" name="rating" />
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                        </label>
                                        <label class="rate-label">
                                            <input type="radio" value="5" name="rating" />
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                            <i class="fa fa-star icon"></i>
                                        </label>
                                    </div>
                                    <small id="rating-err"></small>

                                    <div class="form-group">
                                        <label for="content">Nhận xét của bạn <span class="asterisk">*</span></label>
                                        <textarea class="form-control" name="content" id="content" rows="4"
                                            onkeyup="validateLength(this, 'Your review', 500)"></textarea>
                                    </div>
                                    <div class="form-group" style="margin:0">
                                        <label for=""></label>
                                        <small id="content-err"></small>
                                    </div>

                                    <div class=" form-group">
                                        <label for="">Tên của bạn <span class="asterisk">*</span></label>
                                        <input
                                            value="<?= $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname'] ?>"
                                            type="text" class="form-control" disabled placeholder=""
                                            aria-describedby="helpId">

                                        <div>
                                            <label for=""></label>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email <span class="asterisk">*</span></label>
                                        <input value="<?= $_SESSION['user']['email'] ?>" type="text"
                                            class="form-control" disabled placeholder="" aria-describedby="helpId">
                                        <div>
                                            <label for=""></label>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""></label>
                                        <button type="submit" class="rev-btn">Gửi đánh giá</button>
                                    </div>

                                </form>
                            </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12  ">
                <div class="related__title text-center">
                    <h4>Sản phẩm liên quan</h4>
                </div>
                <div class="content-block">
                    <ul id='pro-list'>
                        <?php foreach ($pro_same_cat as $pro) : ?>
                        <li class="col-lg-4 col-sm-6 col-12">
                            <a href="./?controller=product&action=productDetail&id=<?= $pro['id'] ?>">
                                <div class="pro-block">
                                    <div class="pro-img"><img src="./public/uploads/<?= $pro["image"] ?>">
                                    </div>
                                    <div class="pro-info">
                                        <h5><?= $pro["name"] ?></h5>
                                        <h5><?= number_format($pro['sale_price'] > 0 ? $pro['sale_price'] : $pro['price'], 0, ',', '.') ?> vnđ
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
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
});

$(document).on('click', '.inc', function(){
    let buy = $('.buy_product').val();
    let quan = $('#product_quantity').val();
    if(parseInt(buy) > parseInt(quan)){
        $('.error-quantity').html('Vượt quá số lượng sản phẩm còn lại.');
        $('#buy').prop('disabled', true);
    }
    else{
        $('.error-quantity').html('');
        $('#buy').prop('disabled', false);
    }
});

$(document).on('click', '.dec', function(){
    let buy = $('.buy_product').val();
    let quan = $('#product_quantity').val();
    if(parseInt(buy) > parseInt(quan)){
        $('.error-quantity').html('Vượt quá số lượng sản phẩm còn lại.');
        $('#buy').prop('disabled', true);
    }
    else{
        $('.error-quantity').html('');
        $('#buy').prop('disabled', false);
    }
});

$(document).on('keyup', '.buy_product', function(){
    let buy = $('.buy_product').val();
    let quan = $('#product_quantity').val();
    if(parseInt(buy) > parseInt(quan)){
        $('.error-quantity').html('Vượt quá số lượng sản phẩm còn lại.');
        $('#buy').prop('disabled', true);
    }
    else{
        $('.error-quantity').html('');
        $('#buy').prop('disabled', false);
    }
});

if($('#product_quantity').val() == 0){
    $('#buy').prop('disabled', true);
}

</script>


<?php view('shared.site.footer'); ?>