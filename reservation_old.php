<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
$mail->IsHTML(true);

$mail_reservation_status = "";
$mail_subscribe_status = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['reservation'])) {
    // Set your information here
    $title        = 'Mail From Website';
    $mail_from    = $_POST['email'];
    $mail_replay  = $_POST['email'];
    $mail_to      = 'yourmail@gmail.com';
    $subject      = 'PHPMailer sendmail test';
    $username     = $_POST['username'];
    $phone        = $_POST['phone'];
    $date         = $_POST['date'];
    $time         = $_POST['time'];
    $people       = $_POST['people'];
    $message      = $_POST['message'];
    $mail_body    = $username .'<br/>'.
              $phone.'<br/>'.
              $date.'<br/>'.
              $time.'<br/>'.
              $people.'<br/>'.
              $message;

    //Set who the message is to be sent from
    $mail->setFrom($mail_from, $title);
    //Set an alternative reply-to address
    $mail->addReplyTo($mail_replay, $title);
    //Set who the message is to be sent to
    $mail->addAddress($mail_to, 'John Doe');
    //Set the subject line
    $mail->Subject = $subject;
    //Set the body
    $mail->Body = $mail_body;
    if ( !$mail->send() ) {
      $mail_reservation_status = "<br><p class='text-warning'>Mailer Error: " . $mail->ErrorInfo.'</p>';
    } else {
      $mail_reservation_status = "<br><p class='text-success'>Mail Sent Successfully. Thank you!</p>";
    }
  }
  if (isset($_POST['mail-subscribe'])) {
    $title      = 'MailScrible From Website';
    $mail_subscribe  = $_POST['mail-subscribe'];
    $mail_to      = 'yourmail@gmail.com';
    $subject    = 'Mail Subscribe from Website';
    $mail_body    = 'Email Subscribe from website: ' . $mail_subscribe .'<br/>';

    //Set who the message is to be sent to
    $mail->addAddress($mail_to, 'John Doe');
    //Set the subject line
    $mail->Subject = $subject;
    //Set the body
    $mail->Body = $mail_body;
    if ( !$mail->send() ) {
      $mail_subscribe_status = "<br><p class='text-warning'>Mailer Error: " . $mail->ErrorInfo .' </p>';
    } else {
      $mail_subscribe_status = "<br><p class='text-success'>Mail Sent Successfully. Thank you!</p>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>
    <!-- Bootstrap CSS-->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="assets/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="assets/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="assets/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/pageloading/css/component.min.css">
    <!-- Font-icon-->
    <link rel="stylesheet" href="assets/fonts/font-icon/style.css">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="assets/css/color/colordefault.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="assets/vendors/html5shiv.js"></script>
    <script src="assets/vendors/respond.min.js"></script>
    <script src="assets/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>
  </head>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <header>
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>157 White Oak Drive Kansas City</span></div>
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
                    <div class="wg-social"><i class="fa fa-user"></i><a href="javascript:void(0)">My Account</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="container">
              <div class="open-offcanvas">&#9776;</div>
              <div class="utility-nav">
                <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-logo"><a href="index.html" class="logo"><img src="assets/images/logo.png" alt="fooday" class="logo-img"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown"><a href="index.html" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                        <li><a href="homepage2.html">Home 2</a></li>
                        <li><a href="homepage3.html">Home 3</a></li>
                        <li><a href="homesidebarmenu.html">Home Sidebar Menu</a></li>
                        <li><a href="home-one-page.html">Home One Page</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="current-menu-item"><a href="reservation.html">Reservation</a></li>
                    <li class="dropdown"><a href="menu-grid-1.html" class="dropdown-toggle">
                         
                        Menu</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="menu-classic.html">Menu Classic</a></li>
                        <li><a href="menu-grid-1.html">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.html">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.html">Menu Grid 03</a></li>
                        <li><a href="product-single.html">Product Detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blogs.html">Blog List</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Reservation</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Just a few click to make the reservation online for saving your time and money</div>
              </div>
            </div>
          </div>
          <section class="section-reservation-form padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>Reservation Form</span></h3>
                </div>
                <div class="reservation-form">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 225-88888</span></p>
                    </div>
                  </div>
                  <div class="swin-sc swin-sc-contact-form light mtl">
                    <form action="" method="POST">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" placeholder="Username" name ="username" class="form-control">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input type="email" placeholder="Email" name ="mail" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-phone"></div>
                          </div>
                          <input type="text" placeholder="Phone" name="phone" class="form-control">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-male"></i></div>
                          <select type="text" placeholder="People" name="people" class="form-control">
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
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <input type="text" placeholder="Date" name="date" class="form-control datepicker">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-clock-o"></div>
                          </div>
                          <select type="text" placeholder="Time" name="time" class="form-control">
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
                        <textarea class="form-control" name="message"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="swin-btn-wrap center"><button href="#" class="swin-btn center form-submit" type="submit"> <span>Book Table</span></button></div>
                        <input type="hidden" name="reservation">
                      </div>
                      <?php if ($mail_reservation_status != '') {
                        echo $mail_reservation_status;
                      } ?>
                    </form>
                  </div>
                </div>
                <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>
              </div>
            </div>
          </section>
          <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2 light">
                  <h3 class="title"><span>Fooday Best Service</span></h3>
                </div>
                <div class="swin-sc swin-sc-iconbox light">
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
            </div>
          </section>
          <section class="section-reservation-events padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>Upcoming Events</span></h3>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="swin-sc swin-sc-event swin-transition wow fadeInLeft">
                      <div class="swin-sc-event-inner">
                        <div class="event-info clearfix">
                          <div class="event-date"><span class="day">12</span><span class="month">Jun</span></div>
                          <div class="event-title"><a href="#" class="swin-transition">Hong Kong Tasty Food Cooking Event</a></div>
                        </div>
                        <div class="event-featured-img"><img src="assets/images/event/event-01.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="event-countdown swin-transition">
                          <div class="event-countdown-inner">
                            <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                            <ul class="event-countdown-content list-inline nav-justified">
                              <li><span class="num">03</span><span class="cap">/days</span></li>
                              <li><span class="num">50</span><span class="cap">/foods</span></li>
                              <li><span class="num">290</span><span class="cap">/guests</span></li>
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
                          <div class="event-title"><a href="#" class="swin-transition">Regional Cuisine Down Home Cooking</a></div>
                        </div>
                        <div class="event-featured-img"><img src="assets/images/event/event-02.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="event-countdown swin-transition">
                          <div class="event-countdown-inner">
                            <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                            <ul class="event-countdown-content list-inline nav-justified">
                              <li><span class="num">02</span><span class="cap">/days</span></li>
                              <li><span class="num">20</span><span class="cap">/foods</span></li>
                              <li><span class="num">120</span><span class="cap">/guests</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer>
          <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subcribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>
                    <form class="widget-newsletter" action="#" method="POST">
                      <input placeholder="Email" type="email" required class="form-control" name="mail-subscribe">
                      <button style="border: 0; background-color: transparent" type="submit" class="submit"><span><i class="fa fa-paper-plane"></i></span></button>
                      <?php if ($mail_subscribe_status != '') {
                        echo $mail_subscribe_status;
                      } ?>
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
                        <div class="clearfix"><a class="wget-logo"><img src="assets/images/logo-ft.png" alt="" class="img img-responsive"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
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
      <div id="live-setting" class="hidden-sm hidden-xs"><a id="open-popup"><i class="fa fa-cogs"></i></a>
        <form id="popup">
          <h5 class="live-title">Live Setting</h5>
          <div class="popup-inner">
            <div class="box-setting">
              <p>Pattern Color Variable</p>
              <div class="color-setting">
                <ul class="list-unstyled">
                  <li class="colordefault"><span>Default</span><a></a></li>
                  <li class="color01"><span>Pizza + Bread</span><a></a></li>
                  <li class="color02"><span>Wine</span><a></a></li>
                  <li class="color03"><span>Coffee</span><a></a></li>
                  <li class="color04"><span>Vegetable</span><a></a></li>
                  <li class="color05"><span>Cream</span><a></a></li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuery-->
    <script src="assets/vendors/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="assets/vendors/jquery-cookie/js.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/elements.js"></script>
    <script src="assets/js/widget.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-102426561-1', 'auto');
      ga('send', 'pageview');
      
    </script>
  </body>
</html>