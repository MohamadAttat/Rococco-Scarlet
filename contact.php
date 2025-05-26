<!DOCTYPE html>
<html
  lang="en" itemscope itemtype="http://schema.org/WebPage">
  <?php

  include 'header.php';


  ?>
  <script>
    // Change the title dynamically
window.onload = function () {
document.getElementById('page_title').textContent = "Rococo - Contacts";
};
  </script>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div
        id="html-content" class="wrapper-content">
        <?php

        include 'top_banner.php';


        ?>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title" style="margin-top:40px">Contact Us</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider">
                  <span class="line-before"></span>
                  <span class="dot"></span>
                  <span class="line-after"></span>
                </div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle" style="display:none;">Let us know if you have any concern about our menu, service or other information you want to have</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="ct-info-section padding-top-50 padding-bottom-100">
              <div class="container">
                <div class="row padding-top-100 padding-bottom-100">
                  <div class="col-md-8 col-sm-12">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title">
                        <span>Get In Touch</span>
                      </p>
                    </div>
                    <div class="reservation-form style-02">
                      <div class="swin-sc swin-sc-contact-form light mtl style-full">
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-text">
                                <i class="fa fa-user"></i>
                              </div>
                              <input type="text" placeholder="Full Name" class="form-control" id="contact_fullname">
                            </div>
                          </div>
                          <div class="form-group">
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
                          </div>
                          <div class="form-group">
                            <textarea placeholder="Message" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Lee7ssqAAAAAMUgeL8PEapFZV1220xjUmq3wgV9"></div>
                            <div class="swin-btn-wrap">
                              <a href="#" class="link-underline link-underline-opacity-0 swin-btn center form-submit" id="btn_contact_submit">
                                <span>Send</span>
                              </a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title">
                        <span>Contact Info</span>
                      </p>
                    </div>
                    <div class="swin-sc swin-sc-contact">

                      <div class="media item d-flex gap-2">
                        <div class="media-left">
                          <div class="wrapper-icon">
                            <i class="icons fa fa-map-marker"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Location</h4>
                          <div class="description">1C Ozumba Mbadiwe Ave,<br>Victoria Island, Lagos, Nigeria</div>
                        </div>
                      </div>


                      <div class="media item d-flex gap-2">
                        <div class="media-left">
                          <div class="wrapper-icon">
                            <i class="icons fa fa-phone"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Phone Number</h4>
                          <div class="description">+234 (9) 13 775 5555</div>
                        </div>
                      </div>
                      <div class="media item d-flex gap-2">
                        <div class="media-left">
                          <div class="wrapper-icon">
                            <i class="icons fa fa-envelope"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Email</h4>
                          <div class="description">
                            <p>info@rococo.ng</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="container" style="display: flex; justify-content: center; align-items: center; padding: 20px;" class="map-section padding-bottom-100">
                <div style="position: relative; width: 100%;  height: 0; padding-bottom: 56.25%;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6678245510493!2d3.410088878212121!3d6.436692276935207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8ba437ec581b%3A0x48c40a9b85d7a856!2sRococo%20Restaurant%2C%20Lounge%20%26%20Club!5e0!3m2!1sen!2slb!4v1739731268095!5m2!1sen!2slb" width="100%" height="100%" style="position: absolute; top: 0; left: 0; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </section>
            <!-- <section class="map-section padding-bottom-100">
                                      <div class="container">
                                        <div id="map"></div>
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
    <!-- jQuery-->
    <script src="assets/vendors/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [... tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [... popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdXpLSJ3Ibdu-Phs9QOvpqb9d1DtPf7wQ"></script>

    <script src="assets/js/map.js"></script>
    <script src="actions/ajax.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </body>
</html>

