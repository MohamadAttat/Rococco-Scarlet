    <?php
    // Include database connection
    include 'database_includes/db.php';

    // Check if an ID is provided and is valid
    if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
        echo json_encode(["error" => "Invalid blog ID."]);
        exit;
    }

    $blog_id = $_GET['id'];

    // Fetch blog data securely
    $query = "SELECT * FROM tbl_blogs WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $blog_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $blog = $result->fetch_assoc();

            // Format the date
            $dateObj = new DateTime($blog['created_at']);
            $day = $dateObj->format('d'); // Day as two digits (e.g., 01, 15)
            $month = $dateObj->format('M'); // Short month name (e.g., Jan, Feb)

            // Add formatted date to response
            $blog['day'] = $day;
            $blog['month'] = $month;

               // Fetch related images
            $images_query = "SELECT image_url FROM tbl_blog_gallery WHERE is_enabled = 1 AND related_blog = ?";
            $stmt_images = $conn->prepare($images_query);

            if ($stmt_images) {
                $stmt_images->bind_param("i", $blog_id);
                $stmt_images->execute();
                $result_images = $stmt_images->get_result();

                $related_images = [];
                while ($row = $result_images->fetch_assoc()) {
                    $related_images[] = $row['image_url'];
                }

                $stmt_images->close();
            }
            // echo json_encode(["data" => $blog]); // Return blog data in JSON format
        } else {
            echo json_encode(["error" => "Blog not found."]);
        }

        $stmt->close();
    } else {
        echo json_encode(["error" => "Database error."]);
    }

    $conn->close();
    ?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<?php

include 'header.php';


?>
<script>
   // Change the title dynamically
   window.onload = function() {
       document.getElementById('page_title').textContent = "Rococo - Blog Details";
   };
 </script>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
      <?php

include 'top_banner.php';


?>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title" style="margin-top:40px;">Blog</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle" style="display:none;">All information and stories from our blog will help you have a best meal for your day</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <div class="container">
              <div class="padding-top-100 padding-bottom-100">
                <div class="row">
                  <div class="page-main col-md-12">
                    <div class="blog-wrapper swin-blog-single">
                      <div class="swin-sc-blog-slider style-02">
                        <div class="main-slider">
                          <div class="slides">
                            <div class="blog-item">
                              <div class="blog-featured-img"><img src="<?php echo htmlspecialchars($blog['image_url']); ?>" alt="fooday" class="img img-fluid"></div>
                              <div class="blog-content">
                                <div class="blog-meta-info">
                                  <div class="blog-date"><span class="day"><?php echo htmlspecialchars($blog['day']); ?></span><span class="month"><?php echo htmlspecialchars($blog['month']); ?></span></div>
                                  <!-- <div class="blog-info clearfix" style="opacity:0">
                                    <div class="blog-info-item blog-view">
                                      <p><i class="fa fa-eye"></i><span>18</span></p>
                                      <p></p>
                                    </div>
                                    <div class="blog-info-item blog-comment">
                                      <p><i class="fa fa-comment"></i><span>18</span></p>
                                      <p></p>
                                    </div>
                                    <div class="blog-info-item blog-author">
                                      <p><span>Post By </span><a href="#">Admin</a></p>
                                      <p></p>
                                    </div>
                                  </div> -->
                                  </div>
                                  <div class="blog-meta-info">
                                  <h3 class="blog-title pt-3"><a href="#" class="link-underline link-underline-opacity-0 swin-transition"><?php echo htmlspecialchars($blog['title']); ?></a></h3>
                                  </div>
                                <div class="blog-content-inner">
                                    <p><?php echo ($blog['description']); ?></p>
                                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse utinti cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpato qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                  <p>Threm ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utoi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p> -->
                                  <!-- <blockquote>
                                    <p>The role of a good cook ware in the preparation of a sumptuous meal cannot be overempha.</p>
                                    <footer>Kelly Doe 
                                      <cite title="Source Title">/ Food Blogger</cite>
                                    </footer>
                                  </blockquote> -->
                                  <!-- <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse utinti cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                  <p>Laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat velit esse utinti cillum dolore eu fugiat nulla pariatur.</p> -->
                                  <!-- <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                      <p><a data-lightbox="image" class="view-lightbox swipebox" href="assets/images/blog/blog-grid-1-2.jpg" tagret="_blank">
                                      <img src="assets/images/blog/blog-grid-1-2.jpg" alt="fooday" class="img img-fluid center-block " >
                                      </a></p>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                    <p><a data-lightbox="image" class="view-lightbox swipebox" href="assets/images/blog/blog-grid-1-2.jpg" tagret="_blank">
                                      <img src="assets/images/blog/blog-grid-1-2.jpg" alt="fooday" class="img img-fluid center-block " >
                                      </a></p>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                    <p><a data-lightbox="image" class="view-lightbox swipebox" href="assets/images/blog/blog-grid-1-2.jpg" tagret="_blank">
                                      <img src="assets/images/blog/blog-grid-1-2.jpg" alt="fooday" class="img img-fluid center-block " >
                                      </a></p>
                                    </div>
                                  </div> -->
                                  <!-- <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse utin.</p> -->
                               
                               <!-- Display Related Images -->
                                <div class="row">
                                    <?php if (!empty($related_images)) : ?>
                                        <?php foreach ($related_images as $image) : ?>
                                            <div class="col-sm-4 col-xs-12">
                                                <p>
                                                    <a data-lightbox="image" class="view-lightbox swipebox" href="<?php echo htmlspecialchars($image); ?>" target="_blank">
                                                        <img src="<?php echo htmlspecialchars($image); ?>" alt="Blog Image" class="img img-fluid center-block">
                                                    </a>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>No related images found.</p>
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <!-- <div class="blog-footer clearfix">
                                  <div class="blog-share">
                                    <ul class="socials list-unstyled list-inline">
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                      <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                  </div>
                                  <div class="blog-tags"><strong>Tags:</strong><a href="#">Fooday Menu</a>, <a href="#">Delicious Meal</a></div>
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--  <div class="blog-navigation clearfix">
                        <!-- <div class="navi-item next-post pull-right"><a href="#" class="link-underline link-underline-opacity-0">Next<i class="fa fa-chevron-right"></i></a></div> -->
                         <!-- <div class="navi-item prev-post pull-left"><a href="blogs.php" class="link-underline link-underline-opacity-0">Back<i class="fa fa-chevron-left"></i></a></div>
                      </div>
                      <!-- <div class="blog-author-area">
                        <div class="media d-flex gap-2">
                          <div class="author-image media-left"><a href="#"><img src="assets/images/blog/blog-author.jpg" alt="fooday" class="media-object"></a></div>
                          <div class="media-body">
                            <p class="author-name media-heading mb-1">KELLY DOE</p>
                            <p class="mb-2">Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                            <ul class="socials-nb list-inline mb-0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div> -->
                      <!-- <div class="blog-comment">
                        <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                          <p class="title"><span>3 Comments</span></p>
                        </div>
                        <div class="comment-area">
                          <div class="comment-list media-list list-unstyled">
                            <div class="comment-item media d-flex gap-2">
                              <div class="author-comment-image media-left"><a href="#"><img src="assets/images/blog/blog-comment-avatar01.jpg" alt="fooday" class="media-object"></a></div>
                              <div class="media-body">
                                <p class="author-comment-name media-heading">Andy Doe</p>
                                <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                <ul class="list-inline">
                                  <li class="list-inline-item comment-date">25.12.2016</li>
                                  <li class="list-inline-item comment-reply"><a href="#" class="link-underline link-underline-opacity-0"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                </ul>
                                <div class="comment-item media d-flex gap-2">
                                  <div class="author-comment-image media-left"><a href="#"><img src="assets/images/blog/blog-comment-avatar02.jpg" alt="fooday" class="media-object"></a></div>
                                  <div class="media-body">
                                    <p class="author-comment-name media-heading">Mary Louis</p>
                                    <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                    <ul class="list-inline">
                                      <li class="list-inline-item comment-date">25.12.2016</li>
                                      <li class="list-inline-item comment-reply"><a href="#" class="link-underline link-underline-opacity-0"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="comment-item media d-flex gap-2">
                              <div class="author-comment-image media-left"><a href="#"><img src="assets/images/blog/blog-comment-avatar03.jpg" alt="fooday" class="media-object"></a></div>
                              <div class="media-body">
                                <p class="author-comment-name media-heading">Kelvin Tang</p>
                                <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                <ul class="list-inline">
                                  <li class="list-inline-item comment-date">25.12.2016</li>
                                  <li class="list-inline-item comment-reply"><a href="#" class="link-underline link-underline-opacity-0"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="comment-form">
                          <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                            <p class="title"><span>Leave Comments</span></p>
                          </div>
                          <div class="swin-sc swin-sc-contact-form light mtl margin-bottom-100">
                            <form>
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-text"><i class="fa fa-user"></i></div>
                                  <input type="text" placeholder="Username" class="form-control">
                                </div>
                                <div class="input-group">
                                  <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                  <input type="text" placeholder="Email" class="form-control">
                                </div>
                              </div>
                              <div class="form-group">
                                <textarea class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                <div class="swin-btn-wrap"><a href="#" class="link-underline link-underline-opacity-0 swin-btn form-submit"> <span>Send</span></a></div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                 
                </div>
              </div>
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