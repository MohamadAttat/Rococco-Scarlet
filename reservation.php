<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <?php

  include 'header.php';


  ?>
  <script>
    // Change the title dynamicallyF
window.onload = function () {
document.getElementById('page_title').textContent = "Rococo - Reservation";
};
  </script>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <?php

        include 'top_banner.php';


        ?>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title" style="margin-top:40px;">Reservation</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider">
                  <span class="line-before"></span>
                  <span class="dot"></span>
                  <span class="line-after"></span>
                </div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle" style="display:none;">Just a few click to make the reservation online for saving your time and money</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title">
                      <span>Reservation Form</span>
                    </h3>
                  </div>
                  <div class="reservation-form">
                    <div class="row">
                      <div class="col-md-8 offset-md-2">
                        <p class="reservation-form-title text-center">We are happy to help you make a reservation online to save you time and money, or you can call us directly at our customer service hotline:
                          <span class="text-default">+234 (9) 13 775 5555</span>
                        </p>
                      </div>
                    </div>
                    <div class="swin-sc swin-sc-contact-form light mtl">
                      <form>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-text">
                              <i class="fa fa-user"></i>
                            </div>
                            <input type="text" placeholder="Full Name" class="form-control" id="fullname">
                          </div>
                          <div class="input-group">
                            <div class="input-group-text">
                              <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" placeholder="Email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-text">
                              <div class="fa fa-phone"></div>
                            </div>
                            <input type="text" placeholder="Phone" class="form-control">
                          </div>
                          <div class="input-group">
                            <div class="input-group-text">
                              <i class="fa fa-male"></i>
                            </div>
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
                          <div class="input-group">
                            <div class="input-group-text">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" placeholder="Date" class="form-control datepicker">
                          </div>
                          <div class="input-group">
                            <div class="input-group-text">
                              <div class="fa fa-clock-o"></div>
                            </div>
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
                          <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <div class="g-recaptcha" data-sitekey="6Lee7ssqAAAAAMUgeL8PEapFZV1220xjUmq3wgV9"></div>

                          <div class="swin-btn-wrap center">
                            <a href="#" class="link-underline link-underline-opacity-0 swin-btn center form-submit" id="btn_book_table">
                              <span>Book Table</span>
                            </a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>
                </div>
              </div>
            </section>

            <?php include 'block_booking_deposit.php'; ?>

            <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2 light">
                    <h3 class="title">
                      <span>Rococo Best Services</span>
                    </h3>
                  </div>

                  <div class="swin-sc swin-sc-iconbox light">
                    <div
                      class="row" id="services-row"><!-- <div class="col-md-3 col-sm-6 col-xs-12">
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
                                              </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section-reservation-events padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title">
                      <span>Upcoming Events</span>
                    </h3>
                  </div>
                  <div
                    class="row" id="event-blog-container"><!-- <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="swin-sc swin-sc-event swin-transition wow fadeInLeft">
                                              <div class="swin-sc-event-inner">
                                                <div class="event-info clearfix">
                                                  <div class="event-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                  <div class="event-title"><a href="#" class="link-underline link-underline-opacity-0 swin-transition">Hong Kong Tasty Food Cooking Event</a></div>
                                                </div>
                                                <div class="event-featured-img"><img src="assets/images/event/event-01.jpg" alt="fooday" class="img img-fluid mx-auto d-block"></div>
                                                <div class="event-countdown swin-transition">
                                                  <div class="event-countdown-inner">
                                                    <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                                                    <ul class="event-countdown-content list-inline d-flex justify-content-around">
                                                      <li class="list-inline-item"><span class="num">03</span><span class="cap">/days</span></li>
                                                      <li class="list-inline-item"><span class="num">50</span><span class="cap">/foods</span></li>
                                                      <li class="list-inline-item"><span class="num">290</span><span class="cap">/guests</span></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="swin-sc swin-sc-event swin-transition wow fadeInRight">
                                              <div class="swin-sc-event-inner">
                                                <div class="event-info clearfix">
                                                  <div class="event-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                  <div class="event-title"><a href="#" class="link-underline link-underline-opacity-0 swin-transition">Regional Cuisine Down Home Cooking</a></div>
                                                </div>
                                                <div class="event-featured-img"><img src="assets/images/event/event-02.jpg" alt="fooday" class="img img-fluid mx-auto d-block"></div>
                                                <div class="event-countdown swin-transition">
                                                  <div class="event-countdown-inner">
                                                    <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                                                    <ul class="event-countdown-content list-inline d-flex justify-content-around">
                                                      <li class="list-inline-item"><span class="num">02</span><span class="cap">/days</span></li>
                                                      <li class="list-inline-item"><span class="num">20</span><span class="cap">/foods</span></li>
                                                      <li class="list-inline-item"><span class="num">120</span><span class="cap">/guests</span></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div> -->
                  </div>
                </div>
              </div>
            </section>
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
                  <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus">
                    <i class="fa fa-plus"></i>
                  </a>
                  <a href="javascript:void(0)" class="quanlity-minus">
                    <i class="fa fa-minus"></i>
                  </a>
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
          <div class="dialog-button-group">
            <a href="product-cart.html" class="link-underline link-underline-opacity-0 swin-btn btn-transparent">
              <span>View Cart</span>
            </a>
            <a data-toggle="dialog" data-target="#add-to-cart-dialog" class="link-underline link-underline-opacity-0 swin-btn open-toast">
              <span>Order Now</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="add-to-card-toast toast">
      <div class="toast_content">
        <div role="alert" class="alert alert-success">
          <button type="button" aria-label="Close" class="close close-toast">
            <span aria-hidden="true">×</span>
          </button>
          <strong>Order Successfully!</strong>
          This message will disappearance in 5 seconds
        </div>
      </div>
    </div>
    <?php

    include 'scripts.php';


    ?>
  </body>
</html>
