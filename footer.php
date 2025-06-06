<?php
$open_hours = [
  [
    "day" => "Monday",
    "hours" => "2:00 PM-12:30 AM"
  ],
  [
    "day" => "Tuesday",
    "hours" => "2:00 PM-12:30 AM"
  ],
  [
    "day" => "Wednesday",
    "hours" => "2:00 PM-12:30 AM"
  ],
  [
    "day" => "Thursday",
    "hours" => "2:00 PM-12:30 AM"
  ],
  [
    "day" => "Friday",
    "hours" => "2:00 PM-5:00 AM"
  ],
  [
    "day" => "Saturday",
    "hours" => "2:00 PM-5:00 AM"
  ],
  [
    "day" => "Sunday",
    "hours" => "2:00 PM-1:30 AM"
  ]
]
  ?>

<footer>

  <div class="subscribe-section">
    <img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
    <div class="container">
      <div class="subscribe-wrapper">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="subscribe-heading">
              <h3 class="title">Subscribe Us Now</h3>
              <div class="des">Get more news and delicious dishes every day from us</div>
            </div>
            <form class="widget-newsletter">
              <input type="email" id="subscribe_email" placeholder="Email" class="form-control"
                style=" border: 1px solid #DEC66A;">
              <button type="button" id="btn_subscribe" class="submit subscribe_btn" style="height: 40px;
                   background-color:rgb(255, 255, 255);
                                                      border: 1px solid #DEC66A;
                                                      ">
                <i class="fa fa-paper-plane"></i>
              </button>
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
                <div class="clearfix">
                  <a class="wget-logo"><img src="assets/images/custom/logo_complete_footer.png" alt=""
                      class="img img-fluid" style="max-width:200px"></a>
                </div>

                <div class="about-contact-info clearfix">
                  <br>
                  <div class="address-info">
                    <div class="info-content">
                      <p>
                        <a href="assets/docs/Rococo-Brochure.pdf" target="_blank" class="nav-link">Download Brochure</a>
                      </p>
                      <p>
                        <a href="assets/docs/Rococo-Menu.pdf" target="_blank" class="nav-link">Download Food Menu</a>
                      </p>
                    </div>
                  </div>
                  <div class="phone-info">
                    <div class="info-content">
                      <p>
                        <a href="assets/docs/Rococo-Wine-Menu.pdf" target="_blank" class="nav-link">Download Wine
                          Menu</a>
                      </p>
                      <p>
                        <a href="assets/docs/Rococo-Cocktail-Menu.pdf" target="_blank" class="nav-link">Download
                          Cocktail Menu</a>
                      </p>
                    </div>
                  </div>
                  <div class="email-info hide-on-mobile">
                    <div class="info-content">
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                    </div>
                  </div>
                </div>


                <div class="wget-about-content" style="display:none;">
                  <p>Inspired by the grandeur of the 18th century, Rococo is a place where history and modernity live
                    side by side. Every corner tells a story-from sculpted moldings, pastel palettes, and crystal
                    chandeliers to hidden layers of the world's most advanced technology.</p>
                </div>


                <div class="about-contact-info clearfix">
                  <br class="hide-on-mobile" />
                  <div class="address-info">
                    <div class="info-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="info-content">
                      <p>1C Ozumba Mbadiwe Ave,</p>
                      <p>Victoria Island, Lagos, Nigeria</p>
                    </div>
                  </div>
                  <div class="phone-info">
                    <div class="info-icon">
                      <i class="fa fa-mobile-phone"></i>
                    </div>
                    <div class="info-content" style="margin-top:10px">
                      <p>+234 (9) 13 775 5555</p>
                    </div>
                  </div>
                  <div class="email-info">
                    <div class="info-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-content" style="margin-top:10px">
                      <p>info@rococo.ng</p>
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
                  <?php
                  foreach ($open_hours as $working_day): ?>
                    <div class="res-date-time-item">
                      <div class="res-date">
                        <div class="res-date-item">
                          <div class="res-date-text">
                            <p><?php echo $working_day['day']; ?>:</p>
                          </div>
                          <div class="res-date-dot">................................</div>
                        </div>
                      </div>
                      <div class="res-time">
                        <div class="res-time-item">
                          <p><?php echo $working_day['hours']; ?></p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  <?php endforeach; ?>

                </div>
                <h3 class="res-title">Reservation Numbers</h3>
                <p class="res-number">+234 (9) 137755555</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer_bottom.php'; ?>
  </div>
</footer>
<a id="totop" href="#" class="animated">
  <i class="fa fa-angle-double-up"></i>
</a>