<?php

include 'header.php';


?>

<script>
   // Change the title dynamically
   window.onload = function() {
       document.getElementById('page_title').textContent = "Rococo - Home";
   };
 </script>
<!DOCTYPE html>


<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
      <?php

        include 'top_banner.php';


        ?>
      
        <div class="page-container">
          <div class="top-header top-bg-parallax">
            <div data-parallax="scroll" data-image-src="rococo_images/img23.png" class="slides parallax-window">
              <div class="slide-content slide-layout-02">
                <div class="container">
                  <div class="slide-content-inner"><img src="assets/images/slider/slider2-icon.png" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-fluid img-fluid d-block animated">
                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">ROCOCO </h3>
                   
                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>Squeeze</span><span>Zest</span><span>Savoury</span></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="about-us-session padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-12"><img src="rococo_images/img17.jpeg" alt="" class="img img-fluid wow zoomIn"></div>
                  <div class="col-md-6 col-12">
                    <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                      <p class="top-title"><span>Discover</span></p>
                      <h3 class="title">Our Story</h3>
                    </div>
                    <p class="des font-bold text-center">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                    <p class="des margin-bottom-20 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ullam laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit btn-transparent link-underline link-underline-opacity-0"> <span>	About Us</span></a></div>
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
           
            <section class="product-sesction-03-1 padding-top-100 padding-bottom-100">
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
                            <h5 class="cat-title">Desset</h5>
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
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
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
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
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
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
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
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
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
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span>
                                    <div class="btn-atc-wrapper"><a data-toggle="dialog" data-target="#add-to-cart-dialog" tab-index="0" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>
                                  </div>
                                </div>
                                <div class="item product-01">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span>
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
                </div>
              </div>
            </section>
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
          
            <section data-bottom-top="background-position: 50% 50px;" 
            data-center="background-position: 50% 0px;" 
            data-top-bottom="background-position: 50% -150px;" 
            class="testimonial-section-01 padding-top-100 padding-bottom-100">
            
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

            <section class="team-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Meet Our</span></p>
                      <h3 class="title">Awesome Master Chefs</h3>
                    </div>
                    <div class="swin-sc swin-sc-team-slider" id="team-slider-container">
                      <!-- Dynamic Team Items will be inserted here -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="reservation-section-02 padding-top-100 padding-bottom-100">
              <div class="container"><img src="assets/images/background/home2-img-deco.png" alt="" class="img-deco img-fluid">
                <div class="row">
                  <div class="col-md-6 left-wrapper">
                    <div class="form-dark-wrapper">
                      <div class="swin-sc swin-sc-title style-3 light">
                        <p class="title"><span>Make A Reservation</span></p>
                        <p class="subtitle">You can call us directly at <span class="text-default"> 225-88888</span></p>
                      </div>
                      <div class="swin-sc swin-sc-contact-form dark mtl">
                        <form>
                          <div class="form-group">
                            <div class="input-group"><span class="input-group-text">
                                <div class="fa fa-phone"></div></span>
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
                                <div class="fa fa-clock-o"></div></span>
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
                            <div class="swin-btn-wrap center"><a href="#" class="link-underline link-underline-opacity-0 swin-btn center form-submit"> <span>	Find Table</span></a></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="video-wrapper equal-height deco-abs">
                <div class="swin-sc swin-sc-video">
                  <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>
                </div>
              </div>
            </section>

            <section class="service-section-02 padding-top-100 padding-bottom-100">
              <div class="container">
                  <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Our Service</span></p>
                      <h3 class="title">What We Focus On</h3>
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
                <h3 class="title white-color">Fooday Hot Dishes</h3>
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
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
          </div>
        </div>
        <?php

          include 'footer.php';


          ?>
      </div>
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <div class="loader-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
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
    <!-- <div id="add-to-cart-dialog" class="add-to-card-dialog dialog">
      <div class="dialog__overlay"></div>
      <div class="dialog__content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-5">
              <div class="dialog-product-img"><img src="assets/images/product/product-full-02.jpg" alt="fooday" class="img img-fluid"></div>
            </div>
            <div class="col-md-7">
              <div class="dialog-product-title">The Cracker Barrel's Country Boy Breakfast</div>
              <div class="dialog-product-price">$25.0</div>
              <div class="product-quanlity">
                <div class="input-group">
                  <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="dialog-product-options">
                <p class="option-title">More Options</p>
                <div class="form-check">
                  <input id="productQuantity1" type="radio" name="productOption" value="option1" checked="" class="form-check-input">
                  <label for="productQuantity1" class="form-check-label">Aliquip ex ea commodo consequat</label>
                </div>
                <div class="form-check">
                  <input id="productQuantity2" type="radio" name="productOption" value="option2" checked="" class="form-check-input">
                  <label for="productQuantity2" class="form-check-label">Quis ullam laboris nisi ut aliquip ex ea commodo</label>
                </div>
                <div class="form-check">
                  <input id="productQuantity3" type="radio" name="productOption" value="option3" checked="" class="form-check-input">
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
          <div class="dialog-button-group"><a href="product-cart.html" class="link-underline link-underline-opacity-0 swin-btn btn-transparent"><span>View Cart</span></a><a data-toggle="dialog" data-target="#add-to-cart-dialog" class="link-underline link-underline-opacity-0 swin-btn open-toast"><span>Order Now</span></a></div>
        </div>
      </div>
    </div>
    <div class="add-to-card-toast toast">
      <div class="toast_content">
        <div role="alert" class="alert alert-success">
          <button type="button" aria-label="Close" class="close close-toast"><span aria-hidden="true">×</span></button><strong>Order Successfully!</strong> This message will disappearance in 5 seconds
        </div>
      </div>
    </div> -->
    <!-- jQuery-->
    <script src="assets/vendors/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
      const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
    <!-- Vendors-->
    <script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/jquery-countTo/jquery.countTo.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/parallax/parallax.min.js"></script>
    <script src="assets/vendors/gmaps/gmaps.min.js"></script>
    <script src="assets/vendors/audiojs/audio.min.js"></script>
    <script src="assets/vendors/vide/jquery.vide.min.js"></script>
    <script src="assets/vendors/pageloading/js/svgLoader.min.js"></script>
    <script src="assets/vendors/pageloading/js/classie.min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js"></script>
    <script src="assets/vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/skrollr.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/elements.js"></script>
    <script src="assets/js/widget.js"></script>
      <!-- Script custom added by developer-->

      <script src="actions/ajax.js"></script>
  
  </body>
</html>