<!doctype html>
<html lang="en">

<head>


    <title>Snowy | <?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./public/site/img/snowy.png">
    <link rel="stylesheet" href="./public/admin/dist/css/responsive.css">
    <link rel="stylesheet" href="./public/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./public/site/css/signup.component.css">
    <link rel="stylesheet" href="./public/site/css/login.component.css">
    <link rel="stylesheet" href="./public/site/css/about.component.css">
    <link rel="stylesheet" href="./public/site/css/blog.component.css">
    <link rel="stylesheet" href="./public/site/css/blog-detail.component.css">
    <link rel="stylesheet" href="./public/site/css/cart.component.css">
    <link rel="stylesheet" href="./public/site/css/checkout.component.css">
    <link rel="stylesheet" href="./public/site/css/contact.component.css">
    <link rel="stylesheet" href="./public/site/css/error.component.css">
    <link rel="stylesheet" href="./public/site/css/product.component.css">
    <link rel="stylesheet" href="./public/site/css/product-detail.component.css">
    <link rel="stylesheet" href="./public/site/css/footer.component.css">
    <link rel="stylesheet" href="./public/site/css/header.component.css">
    <link rel="stylesheet" href="./public/site/css/sidebar-blog.component.css">
    <link rel="stylesheet" href="./public/site/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./public/site/css/search.css">
    <link rel="stylesheet" href="./public/site/css/styles.css">

</head>

<body>

    <header class="header">
        <div class="top-bar">
            <div class="container-fluid p-0" style="background-color: white;">
                <div class="row contact-block m-0">

                    <ul class="contact-span m-0 hidden-xs hidden-sm">
                        <li><i class="fas fa-map-marker-alt"></i><span> 39B phố Nguyên Xá Minh Khai Bắc Từ Liêm Hà Nội</span>
                        </li>
                        <li><i class="fas fa-phone-alt"></i><span>(883) 153 8591</span></li>
                    </ul>

                    <div class="login-signup">
                        <?php
                        require('login.php');
                        require('signup.php');
                        ?>

                        <ul class="social-span m-0 hidden-xs hidden-sm">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <nav class="navbar nav-main navbar-expand-md bg-light navbar-light">
           
            <div class="logo">
                <!-- <a class="navbar-brand" href="./"><img src="./public/site/img/home/logo/logo.png" alt="Bakya"></a> -->
                <!-- <a class="navbar-brand" href="./"><img src="./public/site/img/home/logo/logo.png" alt="Bakya"></a> -->
                
                    <div><a><img src="./public/site/img/home/logo/logo.png" alt="" style="width: 80px; height: 56px;"></a></div>
                
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto my-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./" title="home">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='./?controller=home&action=about' title="about">Về Snowy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='./?controller=product&action=allProducts' title="product">Sản Phẩm</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='./?controller=contact' title="contact">Liên Hệ</a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <a onclick="showSearchBar()" class="dropbtn nav-link" title="search"><i class="fas fa-search"></i></a>
                            <div id="myDropdown" class="dropdown-content">
                                <input type="text" placeholder="Search Product Name" id="myInput" onkeyup="showSearchResult(this.value)">
                                <div id="searched-items">
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href='./?controller=cart' title="cart"><i class="fas fa-shopping-basket"></i><span class="badge badge-warning navbar-badge" id="cart-quantity"><?= $_SESSION['total_quantity'] ?? 0 ?></span></a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>