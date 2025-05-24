<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php

include 'header.php';


?>
<script>
   // Change the title dynamicallyF
   window.onload = function() {
       document.getElementById('page_title').textContent = "Rococo - Menu";
   };
</script>
  <!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Classic</title>

    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="assets/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="assets/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="assets/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/pageloading/css/component.min.css">
    <link rel="stylesheet" href="assets/vendors/dialog/css/dialog.css">
    <link rel="stylesheet" href="assets/fonts/font-icon/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-override.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <script src="assets/vendors/html5shiv.js"></script>
    
    <script src="assets/vendors/respond.min.js"></script>
    <script src="assets/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="actions/ajax.js"></script>
  </head> -->
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
      <?php

include 'top_banner.php';


?>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title" style="margin-top:40px">Our Menu</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle" style="display:none;">The various dishes are waiting for your coming to enjoy its</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
           <!--  <section class="product-sesction-menu padding-bottom-100 padding-top-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title style-3">
                      <p class="title"><span>Breakfast Time</span></p>
                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                              <h5 class="cat-title">Rice</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                              <h5 class="cat-title">Soup</h5>
                            </div>
                          </div>
                          <div class="item">
                            <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                            <h5 class="cat-title">coffee</h5>
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
                        <div class="nav-slider">
                          <div class="tab-content d-md-flex d-sm-block">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-md-flex d-sm-block">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-md-flex d-sm-block">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-md-flex d-sm-block">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-content d-md-flex d-sm-block">
                            <div class="col-md-5 col-sm-12">
                              <div class="cat-wrapper">
                                <div class="item"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-fluid img-full"></div>
                              </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                              <div class="products">
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Old Timer's Meat Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">The Cracker Barrel's Country Boy Breakfast</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Grandpa's Country Fried Breakfast </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Uncle Herschel's Favorite </h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                </div>
                                <div class="item product-01 d-flex">
                                  <div class="item-left">
                                    <h5 class="title">Chinese Chicken Bread Spicy Soup</h5>
                                    <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                  </div>
                                  <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
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
            </section>-->
         
            <div id="menu-container">
                <!-- Categories and items will be injected here dynamically -->
            </div>

         
            
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
    <div id="add-to-cart-dialog" class="add-to-card-dialog dialog">
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
    </div>
    <?php

include 'scripts.php';


?>
  </body>
</html>