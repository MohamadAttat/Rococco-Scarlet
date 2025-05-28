<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<?php

include 'header.php';
require_once('services/HPService.php');
$homeService = new HPService();
$slides = $homeService->getSlides();
?>
<script>
  // Change the title dynamically
  window.onload = function () {
    document.getElementById('page_title').textContent = "Rococo - Home";
  };
</script>
<!DOCTYPE html>

<body>
  <div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">
      <?php

      include 'top_banner.php';


      ?>
      <!-- <header class="header-transparent">
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>160 White Oak Drive Kansas City</span></div>
                  </div>
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-phone"></i><span>012 987 650</span></div>
                  </div>
                </div>
              </div>
              <div class="topbar-right">
                <div class="topbar-content">
                  <div class="item">
                    <ul class="socials-nb list-inline wg-social">
                      <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                      <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="wg-social"><i class="fa fa-user"></i><span>My Account</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="container">
              <div class="open-offcanvas">&#9776;</div>
              <div class="utility-nav">
                <div class="dropdown dropdown-full-mobile open"><a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-shopping-bag"></i></a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="cart_lite">
                      <div class="cart_lite_list">
                        <ul>
                          <li class="cart_lite_item"><a href="product-single.html" class="cart_item_thumbnail"><img width="150" height="100" src="assets/images/product/product-circle-1h.jpg" alt="" class="img-fluid"></a>
                            <div class="cart_item_summary"><a href="product-single.html" class="link-underline link-underline-opacity-0 cart_item_title">Caramel Frappuccino</a><span class="product-price-amount"><span class="quantity">1 × </span><span class="product-price-currencySymbol">$</span>12.0</span></div><a href="#" class="link-underline link-underline-opacity-0 remove_from_cart_button">×</a>
                          </li>
                          <li class="cart_lite_item"><a href="product-single.html" class="cart_item_thumbnail"><img width="150" height="100" src="assets/images/product/product-circle-1k.jpg" alt="" class="img-fluid"></a>
                            <div class="cart_item_summary"><a href="product-single.html" class="link-underline link-underline-opacity-0 cart_item_title">Chocolate Fudge Ripple</a><span class="product-price-amount"><span class="quantity">2 × </span><span class="product-price-currencySymbol">$</span>24.0</span></div><a href="#" class="link-underline link-underline-opacity-0 remove_from_cart_button">×</a>
                          </li>
                        </ul>
                      </div>
                      <div class="cart_lite_total">
                        <p><strong>Subtotal: </strong><span class="product-price-amount"><span class="product-price-currencySymbo">$</span>60.0</span></p>
                      </div>
                      <div class="cart_lite_button"><a href="product-cart.html" class="link-underline link-underline-opacity-0 swin-btn btn-sm"><span>View Cart</span></a><a href="product-checkout.html" class="link-underline link-underline-opacity-0 swin-btn btn-sm"><span>Checkout</span></a></div>
                    </div>
                  </div>
                </div>
                <div class="dropdown"><a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-text"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-logo"><a href="index.html" class="logo logo-static"><img src="assets/images/logo-white.png" alt="fooday" class="logo-img"></a><a href="index.html" class="logo logo-fixed"><img src="assets/images/logo.png" alt="fooday" class="logo-img"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="nav-item dropdown dropdown--hover current-menu-item"><a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="index.html" class="dropdown-item">Home 1</a></li>
                        <li><a href="homepage2.html" class="dropdown-item">Home 2</a></li>
                        <li><a href="homepage3.html" class="dropdown-item">Home 3</a></li>
                        <li><a href="home-fullpage.html" target="_blank" class="dropdown-item">Home Full Page</a></li>
                        <li><a href="home-shop.html" class="dropdown-item">Home Shop</a></li>
                        <li><a href="homesidebarmenu.html" class="dropdown-item">Home Sidebar Menu</a></li>
                        <li><a href="home-one-page.html" target="_blank" class="dropdown-item">Home One Page</a></li>
                        <li><a href="home-boxed.html" class="dropdown-item">Home Boxed</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="reservation.html" class="nav-link">Reservation</a></li>
                    <li class="nav-item dropdown dropdown--hover"><a href="menu-grid-1.html" class="nav-link">Menu</a>
                      <ul class="dropdown-menu">
                        <li><a href="menu-classic.html" class="dropdown-item">Menu Classic</a></li>
                        <li><a href="menu-grid-1.html" class="dropdown-item">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.html" class="dropdown-item">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.html" class="dropdown-item">Menu Grid 03</a></li>
                        <li><a href="product-single.html" class="dropdown-item">Product Detail</a></li>
                        <li><a href="product-cart.html" class="dropdown-item">Product Cart</a></li>
                        <li><a href="product-checkout.html" class="dropdown-item">Product Checkout</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown dropdown--hover"><a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blogs.html" class="dropdown-item">Blog List</a></li>
                        <li><a href="blog-single.html" class="dropdown-item">Blog Single</a></li>
                        <li><a href="page-404.html" class="dropdown-item">404 Page</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header> -->
      <div class="page-container">
        <div class="top-header top-bg-parallax">
          <div id="slides-row">
            <?php
            foreach ($slides as $key => $slide) {
              $slideImg = isset($slide['content_img']) ? "<img src='assets/images/slider/{$slide['content_img']}' data-ani-in='fadeInUp' data-ani-out='fadeOutDown'
                                    data-ani-delay='500' alt='fooday' class='slide-icon img img-fluid img-fluid d-block animated' />" : '';
              $slideTitle = isset($slide['content_title']) ? "<h3 data-ani-in='fadeInUp' data-ani-out='fadeOutDown' data-ani-delay='1000'
                                    class='slide-title animated'>{$slide['content_title']}</h3>" : '';
              $slideText = isset($slide['content_text']) ? "<p data-ani-in='fadeInUp' data-ani-out='fadeOutDown' data-ani-delay='1500'
                                    class='slide-sub-title animated'><span class='line-before'></span><span
                                    class='line-after'></span><span class='text'>{$slide['content_text']}</span></p>" : '123';
              echo "<div data-parallax='scroll' data-image-src='assets/images/slider/{$slide['bg_image']}' class='slides parallax-window'>
                    <div class='overlay'></div>    
                    <div class='slide-content slide-layout-02'>
                            <div class='container'>
                                <div class='slide-content-inner'>
                                $slideImg
                                $slideTitle
                                $slideText
                                </div>
                            </div>
                        </div>
                    </div>";
            }
            ?>
          </div>
        </div>
        <div class="page-content-wrapper">
          <section class="about-us-session padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-12"><img src="rococo_images/img17.jpeg" alt=""
                    class="img img-fluid wow zoomIn"></div>
                <div class="col-md-6 col-12">
                  <div class="swin-sc swin-sc-title style-4 margin-bottom-20">
                    <p class="top-title"><span>Discover</span></p>
                    <h3 class="title">Our Story</h3>
                  </div>
                  <p class="des font-bold text-center">Timeless Beauty. Modern Energy. One Destination.</p>
                  <p class="des margin-bottom-20 text-justify" style="text-align:justify;">
                    Inspired by the grandeur of the 18th century, Rococo is a place where history and modernity live
                    side by side. Every corner tells a story—from sculpted moldings, pastel palettes, and crystal
                    chandeliers to hidden layers of the world’s most advanced technology.
                    <br>
                    Here, no two moments feel the same.
                    <br>
                    By day, the Restaurant offers refined cuisine bathed in natural light with panoramic views of the
                    skyline—an elegant escape where classic taste meets calm sophistication.
                    <br>
                    As the sun sets, the mood shifts. The Lounge glows under chandeliers, filled with live rhythms and
                    crafted cocktails, offering the perfect blend of old-world charm and elevated social energy.
                    <br>
                    And when the night deepens, the space transforms again. The Club comes alive in a multisensory burst
                    of 3D mapping, LED walls, AI visuals, and a sound and light system built to rival the world’s most
                    iconic venues.
                    <br>
                    Whether you're dining, celebrating, performing, or exploring—Rococo is not just a venue.
                    <br>
                    It’s three worlds in one.
                    <br>
                    A journey through time. Designed for now.
                  </p>

                  <br>
                  <div class="swin-btn-wrap center"><a href="about.php"
                      class="swin-btn center form-submit btn-transparent link-underline link-underline-opacity-0">
                      <span> About Us</span></a></div>
                </div>
              </div>
            </div>
          </section>
          <!-- <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets/images/product/product-decorate.jpg" alt="" class="img-fluid img-decorate">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-4"></div>
                  <div class="col-lg-6 col-md-8">
                    <div class="swin-sc swin-sc-title text-left light">
                      <p class="top-title"><span>chef choise</span></p>
                      <h3 class="title">Daily Special</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                      <div class="row">
                        <div class="col-md-12">
                          <div data-height="200" class="products nav-slider full-infor">
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">The Cracker Barrel's Country Boy Breakfast</a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0	</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">Uncle Herschel's Favorite </a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">Grandpa's Country Fried Breakfast </a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">Chinese Chicken Bread Spicy Soup</a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">Uncle Herschel's Favorite </a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                            <div class="item product-01 d-flex">
                              <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-fluid">
                                <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">The Cracker Barrel's Country Boy Breakfast</a>
                                  <div class="dot">....................................</div>
                                  <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                </div>
                              </div>
                              <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

          <section class="product-sesction-03-1 padding-top-100 padding-bottom-100" style="display:none;">
            <img src="rococo_images/img3.jpeg" alt="" class="img-fluid img-decorate">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-4"></div>
                <div class="col-lg-6 col-md-8">
                  <div class="swin-sc swin-sc-title text-left light">
                    <p class="top-title"><span>Chef Choice</span></p>
                    <h3 class="title">Daily Special</h3>
                  </div>
                  <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                    <div data-height="200" class="products nav-slider full-infor" id="specials-container">
                      <!-- <div class="row" >
                              </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="product-sesction-01 padding-bottom-100 padding-top-100">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-title">
                    <p class="top-title"><span>Our Menu</span></p>
                    <h3 class="title">Tasty And Good Price</h3>
                  </div>
                  <div class="swin-sc swin-sc-product products-01 style-02 woocommerce here_to_initialize">
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8 menu-categories">

                      </div>
                    </div>

                    <div class="row">
                      <div class="menu-items-container px-0 nav-slider">
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </section>



          <!-- <section class="product-sesction-01 padding-bottom-100 padding-top-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Our Menu</span></p>
                      <h3 class="title">Tasty And Good Price</h3>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                              <h5 class="cat-title">Breakfast</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                              <h5 class="cat-title">Lunch</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                            <h5 class="cat-title">Dinner</h5>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>
                            <h5 class="cat-title">Dessert</h5>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>
                            <h5 class="cat-title">Drink</h5>
                          </div>
               
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                      <div class="row">
                        <div class="nav-slider px-0">
                          <div class="tab-content d-flex flex-wrap">
                            <div class="col-md-5 col-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-12">
                              <div class="products full-infor">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-flex flex-wrap">
                            <div class="col-md-5 col-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-12">
                              <div class="products full-infor">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-flex flex-wrap">
                            <div class="col-md-5 col-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-12">
                              <div class="products full-infor">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-flex flex-wrap">
                            <div class="col-md-5 col-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-12">
                              <div class="products full-infor">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-flex flex-wrap">
                            <div class="col-md-5 col-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-drink.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-12">
                              <div class="products full-infor">
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                   
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                   

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
          <!-- <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Testimonial</span></p>
                      <h3 class="title white-color">Our Customer Says</h3>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-md-10 col-md-offset-1">
                        <div class="swin-sc swin-sc-testimonial style-1">
                          <div class="main-slider flexslider">
                            <div class="slides">
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Sarah	Ruiz</span> <span class="position">Director</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Tracey Lewis</span> <span class="position">Designer</span></div>
                              </div>
                              <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                <div class="testi-content">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                </div>
                                <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Manager</span></div>
                              </div>
                            </div>
                          </div>
                          <div data-width="150" class="nav-slider">
                            <ul class="slides list-inline">
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testimonial-3.jpg" alt="fooday" class="img img-fluid swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-2.jpg" alt="fooday" class="img img-fluid swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testimonial-3.jpg" alt="fooday" class="img img-fluid swin-transition"></a></li>
                              <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/testi/testi-4.jpg" alt="fooday" class="img img-fluid swin-transition"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

          <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;"
            data-top-bottom="background-position: 50% -150px;"
            class="testimonial-section-01 padding-top-100 padding-bottom-100" style="display:none;">

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-title">
                    <p class="top-title"><span>Testimonial</span></p>
                    <h3 class="title white-color">Our Customer Says</h3>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="swin-sc swin-sc-testimonial style-1" id="testimonials-container">
                        <div class="main-slider flexslider">
                          <div class="slides">
                          </div>
                        </div>
                        <div data-width="150" class="nav-slider">
                          <ul class="slides list-inline">
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--                       
            <section class="team-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Meet Our</span></p>
                      <h3 class="title">Awesome Master Chefs</h3>
                    </div>
                    <div class="swin-sc swin-sc-team-slider">
                      <div class="team-item swin-transition wow fadeInLeft">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-1.png" alt="" class="img img-fluid"></div>
                        </div>
                        <p class="team-name">MICHAEL DOE</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition wow fadeInUp">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-2.png" alt="" class="img img-fluid"></div>
                        </div>
                        <p class="team-name">Teresa Doe</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition wow fadeInRight">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-3.png" alt="" class="img img-fluid"></div>
                        </div>
                        <p class="team-name">BENJAMIN MARK</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                      <div class="team-item swin-transition">
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="assets/images/team/team-4.png" alt="" class="img img-fluid"></div>
                        </div>
                        <p class="team-name">Teresa Doe</p>
                        <p class="team-position">Head Chef</p>
                        <hr>
                        <ul class="socials-nb list-inline">
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

          <section class="team-section padding-top-100 padding-bottom-100" style="display:none;">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-title">
                    <p class="top-title"><span>Meet Our</span></p>
                    <h3 class="title">Awesome Master Chefs</h3>
                  </div>
                  <div class="swin-sc swin-sc-team-slider" id="team-slider-container">

                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="reservation-section-02 padding-top-100 padding-bottom-100">
            <div class="container"><img src="assets/images/background/home2-img-deco.png" alt=""
                class="img-deco img-fluid">
              <div class="row">
                <div class="col-md-6 left-wrapper">
                  <div class="form-dark-wrapper">
                    <div class="swin-sc swin-sc-title style-3 light">
                      <p class="title"><span>Make A Reservation</span></p>
                      <p class="subtitle">Welcome to Rococo Restaurant | Music-Hall | Club!</p>
                    </div>
                    <div class="swin-sc swin-sc-contact-form dark mtl">
                      <form>
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-text">
                              <div class="fa fa-user"></div>
                            </span>
                            <input type="text" placeholder="Full Name" class="form-control" id="fullname">
                          </div>
                          <div class="input-group"><span class="input-group-text">
                              <div class="fa fa-envelope"></div>
                            </span>
                            <input type="text" placeholder="Email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="input-group"><span class="input-group-text">
                              <div class="fa fa-phone"></div>
                            </span>
                            <input type="text" placeholder="Phone" class="form-control">
                          </div>
                          <div class="input-group"><span class="input-group-text"><i class="fa fa-male"></i></span>
                            <select type="text" placeholder="People" class="form-select">
                              <option>1 person</option>
                              <option>2 People</option>
                              <option>3 People</option>
                              <option>4 People</option>
                              <option>5 People</option>
                              <option>6 People</option>
                              <option>7 People</option>
                              <option>8 People</option>
                              <option>9 People</option>
                              <option>10 People</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group"><span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            <input type="text" placeholder="Date" class="form-control datepicker">
                          </div>
                          <div class="input-group"><span class="input-group-text">
                              <div class="fa fa-clock-o"></div>
                            </span>
                            <select type="text" placeholder="Time" class="form-select">
                              <option>7:00 AM</option>
                              <option>8:00 AM</option>
                              <option>9:00 AM</option>
                              <option>10:00 AM</option>
                              <option>11:00 AM</option>
                              <option>12:00 AM</option>
                              <option>1:00 PM</option>
                              <option>2:00 PM</option>
                              <option>3:00 PM</option>
                              <option>4:00 PM</option>
                              <option>5:00 PM</option>
                              <option>6:00 PM</option>
                              <option>7:00 PM</option>
                              <option>8:00 PM</option>
                              <option>9:00 PM</option>
                              <option>10:00 PM</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="g-recaptcha" data-sitekey="6Lee7ssqAAAAAMUgeL8PEapFZV1220xjUmq3wgV9"></div>

                          <div class="swin-btn-wrap center"><a href="#"
                              class="link-underline link-underline-opacity-0 swin-btn center form-submit"
                              id="btn_book_table"> <span> Find Table</span></a></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div style="display: none;">
                <div id="video-content" >
                  <video controls width="100%" height="auto">
                    <source src="assets/video/rococo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>-->
            <div class="video-wrapper equal-height deco-abs">
              <div class="swin-sc swin-sc-video">
                <div class="play-wrap">
                  <a href="assets/video/rococo.mp4" data-fancybox data-ratio="9/16" class="play-btn">
                    <i class="play-icon fa fa-play"></i>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <section class="service-section-02 padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="swin-sc swin-sc-title">
                <p class="top-title"><span>Our Services</span></p>
                <h3 class="title">What We Focus On</h3>
                <p class="des margin-bottom-20 text-center">
                  <br>
                  At Rococo, we offer a full spectrum of high-end hospitality, entertainment, and lifestyle experiences
                  – seamlessly curated across multiple signature spaces under one iconic destination.
                </p>
              </div>
              <div class="swin-sc swin-sc-iconbox">
                <div class="row" id="services-row">

                </div>
              </div>
            </div>
          </section>
          <!-- <section class="service-section-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title">
                  <p class="top-title"><span>Our Service</span></p>
                  <h3 class="title">What We Focus On</h3>
                </div>
                <div class="swin-sc swin-sc-iconbox">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                        <h4 class="title">Reservation</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                        <h4 class="title">Private Event</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                        <h4 class="title">Online Order</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                        <h4 class="title">Fast Delivery</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
          <!-- <section class="gallery-section-01 padding-top-100">
              <div class="swin-sc swin-sc-title">
                <p class="top-title"><span>Our Gallery</span></p>
                <h3 class="title white-color">Rococo Hot Dishes</h3>
              </div>
              <div class="swin-sc swin-sc-isotope">
                <div class="grid">
                  <div class="grid-sizer col-sm-1"></div>
                  <div class="grid-item col-sm-3 grid-item-h2">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-1.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-1.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-4 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-2.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-2.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-2 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-3.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-3.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-3 grid-item-h2">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-4.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-4.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-2 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-5.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-5.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                  <div class="grid-item col-sm-4 grid-item-h1">
                    <div class="grid-wrap-item"><a href="#" class="link-underline link-underline-opacity-0 gallery-title title">Chicago Beefsteak</a><a href="assets/images/gallery/gallery-6.jpg" data-lightbox="image" class="view-lightbox swipebox"><i class="fa fa-search-plus"></i></a><a href="#" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap"><img src="assets/images/gallery/gallery-6.jpg" alt="" class="img img-fluid"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

          <section class="gallery-section-01 padding-top-100">
            <div class="swin-sc swin-sc-title">
              <p class="top-title"><span>Our Gallery</span></p>
              <h3 class="title white-color">Rococo Hot Dishes</h3>
            </div>
            <div class="swin-sc swin-sc-isotope">
              <div class="grid">
                <div class="grid-sizer col-sm-1"></div>
                <?php
                $folderPath = "assets/images/gallery/";
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Allowed image types
                $files = glob($folderPath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Get all images
                
                foreach ($files as $index => $file) {
                  $fileName = basename($file);
                  $title = pathinfo($fileName, PATHINFO_FILENAME); // Extract file name without extension
                  $colSize = ($index % 3 == 0) ? 'col-sm-3 grid-item-h2' : (($index % 2 == 0) ? 'col-sm-4 grid-item-h1' : 'col-sm-2 grid-item-h1'); // Vary column size
                  ?>
                  <div class="grid-item <?= $colSize ?>">
                    <div class="grid-wrap-item">
                      <a class="gallery-title title"><?= ucfirst(str_replace('-', ' ', $title)) ?></a>
                      <a href="<?= $file ?>" data-lightbox="image" target="_blank" class="view-lightbox swipebox"><i
                          class="fa fa-search-plus"></i></a>
                      <a href="menu_functional.php" target="_blank" class="view-more"><i class="fa fa-link"></i></a>
                      <div class="img-wrap">
                        <img src="<?= $file ?>" alt="<?= $title ?>" class="img img-fluid">
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </section>

          <section class="blog-section padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-title">
                    <p class="top-title"><span>Updated from</span></p>
                    <h3 class="title">our featured blog</h3>
                  </div>
                  <div class="swin-sc swin-sc-blog-grid"></div>
                </div>
                <div class="col-md-12">
                  <div class="swin-sc swin-sc-blog-grid">
                    <div class="row" id="featured-blog-container">
                      <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                          <div data-wow-delay="0s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)" class="link-underline link-underline-opacity-0">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1.jpg" alt="fooday" class="img img-fluid"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div data-wow-delay="0.5s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)" class="link-underline link-underline-opacity-0">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1-1.jpg" alt="fooday" class="img img-fluid"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-12 col-xs-12">
                          <div data-wow-delay="1s" class="blog-item swin-transition item wow fadeInUpShort">
                            <div class="blog-info clearfix">
                              <div class="blog-info-item blog-view">
                                <p><i class="fa fa-eye"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-comment">
                                <p><i class="fa fa-comment"></i><span>18</span></p>
                                <p></p>
                              </div>
                              <div class="blog-info-item blog-author">
                                <p><span>Post By </span><a href="javascript:void(0)" class="link-underline link-underline-opacity-0">Admin</a></p>
                                <p></p>
                              </div>
                            </div>
                            <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1-2.jpg" alt="fooday" class="img img-fluid"></div>
                            <div class="blog-content">
                              <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                              <h3 class="blog-title"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="blog-readmore"><a href="javascript:void(0)" class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                          </div>
                        </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php

      include 'footer.php';


      ?>
      <!-- <footer>
          <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row justify-content-center">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subcribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>
                    <form class="widget-newsletter">
                      <input placeholder="Email" class="form-control"><span class="submit"><i class="fa fa-paper-plane"></i></span>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-top"></div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="assets/images/logo-ft.png" alt="" class="img img-fluid"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                        <div class="wget-about-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
                        </div>
                        <div class="about-contact-info clearfix">
                          <div class="address-info">
                            <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info-content">
                              <p>157 White Oak Drive Kansas City </p>
                              <p>689 Lynn Street South Boston</p>
                            </div>
                          </div>
                          <div class="phone-info">
                            <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="info-content">
                              <p>(617)-276-8031</p>
                              <p>(617)-276-8031</p>
                            </div>
                          </div>
                          <div class="email-info">
                            <div class="info-icon"><i class="fa fa-envelope"></i></div>
                            <div class="info-content">
                              <p>admin@fooday.com</p>
                              <p>support@fooday.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="ft-fixed-area">
                    <div class="reservation-box">
                      <div class="reservation-wrap">
                        <h3 class="res-title">Open Hour</h3>
                        <div class="res-date-time">
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Tuesday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Wednesday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Thursday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Friday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Saturday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Sunday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Monday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>Close</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <h3 class="res-title">Reservation Numbers</h3>
                        <p class="res-number">(617)-276-8031</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a> -->
    </div>
    <div id="loader"
      data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z"
      class="pageload-overlay">
      <div class="loader-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60"
          preserveaspectratio="none">
          <path
            d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z">
          </path>
        </svg>
        <div class="sk-circle">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>
        <div class="sk-circle sk-circle-out">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="add-to-cart-dialog" class="add-to-card-dialog dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div class="dialog-product-img"><img src="assets/images/product/product-full-02.jpg" alt="fooday"
                class="img img-fluid"></div>
          </div>
          <div class="col-md-7">
            <div class="dialog-product-title">The Cracker Barrel's Country Boy Breakfast</div>
            <div class="dialog-product-price">$25.0</div>
            <div class="product-quanlity">
              <div class="input-group">
                <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a
                  href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a
                  href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="dialog-product-options">
              <p class="option-title">More Options</p>
              <div class="form-check">
                <input id="productQuantity1" type="radio" name="productOption" value="option1" checked=""
                  class="form-check-input">
                <label for="productQuantity1" class="form-check-label">Aliquip ex ea commodo consequat</label>
              </div>
              <div class="form-check">
                <input id="productQuantity2" type="radio" name="productOption" value="option2" checked=""
                  class="form-check-input">
                <label for="productQuantity2" class="form-check-label">Quis ullam laboris nisi ut aliquip ex ea
                  commodo</label>
              </div>
              <div class="form-check">
                <input id="productQuantity3" type="radio" name="productOption" value="option3" checked=""
                  class="form-check-input">
                <label for="productQuantity3" class="form-check-label">Commodo consequat aliquip</label>
              </div>
            </div>
            <div class="dialog-product-options">
              <p class="option-title">Other options</p>
              <div class="form-check">
                <input id="productOption2" type="checkbox" name="" value="option3" checked="" class="form-check-input">
                <label for="productOption2" class="form-check-label">Ullam laboris nisi ut aliquip ex ea commodo</label>
              </div>
              <div class="form-check">
                <input id="productOption3" type="checkbox" name="" value="option3" class="form-check-input">
                <label for="productOption3" class="form-check-label">Ut enim ad minim veniam</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="dialog-button-group"><a href="product-cart.html"
            class="link-underline link-underline-opacity-0 swin-btn btn-transparent"><span>View Cart</span></a><a
            data-toggle="dialog" data-target="#add-to-cart-dialog"
            class="link-underline link-underline-opacity-0 swin-btn open-toast"><span>Order Now</span></a></div>
      </div>
    </div>
  </div>
  <div class="add-to-card-toast toast">
    <div class="toast_content">
      <div role="alert" class="alert alert-success">
        <button type="button" aria-label="Close" class="close close-toast"><span
            aria-hidden="true">×</span></button><strong>Order Successfully!</strong> This message will disappearance in
        5 seconds
      </div>
    </div>
  </div>
  <?php

  include 'scripts.php';


  ?>

</body>

</html>