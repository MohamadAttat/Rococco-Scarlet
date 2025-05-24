var currentUrl = window.location.href;

$(document).ready(function () {
	    // Get the current page URL
        var currentUrl = window.location.pathname;

        // Loop through each menu item
        $('#main-nav a').each(function () {
            var href = $(this).attr('href'); // Get the href of the link
    
            // Check if the href matches the current URL
            if (currentUrl.includes(href)) {
                // Remove the 'current-menu-item' from any other menu items
                $('#main-nav li').removeClass('current-menu-item');
                
                // Add the 'current-menu-item' class to the matching menu item
                $(this).closest('li').addClass('current-menu-item');
            }
        });
    if (currentUrl.includes('menu_functional.php')) {
        // Initiating the AJAX call to fetch the menu data
        $.ajax({
            url: 'actions/actions.php', // PHP file handling all actions
            type: 'POST', // Sending data via POST method
            dataType: 'json', // Expecting JSON response
            data: {
                action: 'fetch_menu', // Action name to fetch the menu
            },
            
            success: function (data) {
                console.log("data");
                console.log(data);
                let menuHtml = ''; // Variable to store all menu HTML
                let categoriesHtml = ''; // Variable to store all categories' HTML under one section

                // Iterate through each category
                data.forEach(function (category,index) {
                    let itemsHtml = ''; // Variable to store items HTML for each category
                    
                    // Iterate through each item in the category
                    category.items.forEach(function (item) {
                        // Build HTML for each item
                        itemsHtml += `
                            <div class="item product-01 d-flex">
                                <div class="item-left">
                                    <h5 class="title">${item.item_name}</h5>
                                    <div class="des">${item.item_description}</div>
                                </div>
                                <div class="item-right">
                                    <span class="price woocommerce-Price-amount amount">
                                        <span class="price-symbol">$</span>${item.item_price}
                                    </span>
                                </div>
                            </div>`;
                    });
                    let categoryClass = index === 0 ? "swin-sc swin-sc-title style-3" : "swin-sc swin-sc-title style-3 mt-5";

                    // Build HTML for each category (now grouped together under one section)
                    categoriesHtml += `
                        <div class="category-section">
                            <div class="${categoryClass}">
                                <p class="title"><span>${category.category_name}</span></p>
                            </div>
                            <div class="products">
                                ${itemsHtml}
                            </div>
                        </div>`;
                });

                // Now wrap all categories in a single section
                menuHtml = `
                    <section class="product-sesction-menu padding-bottom-100 padding-top-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                                        
                                        <div class="row">
                                            <div class="nav-slider">
                                                <div class="tab-content d-md-flex d-sm-block">
                                                    <div class="col-md-12">
                                                        <div class="categories-list">
                                                            ${categoriesHtml} <!-- Insert all categories here -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>`;

                // Inject the generated HTML into the container
                $('#menu-container').html(menuHtml);
            },
            error: function (error) {
                console.log("Error");
                
                // Handle AJAX error gracefully
                console.error('Error fetching menu:', error);
                $('#menu-container').html('<p>Error loading menu. Please try again later.</p>'); // Display error message to the user
            }
        });
    }

    if (currentUrl.includes('index.php')) {


        // $.ajax({
        //     url: 'actions/actions.php',
        //     type: 'POST',
        //     dataType: 'json',
        //     data: {
        //         action: 'fetch_all_menu_items' // New action to fetch all categories + items
        //     },
        //     success: function (response) {
        //         console.log("Menu Data:", response);
        
        //         if (response.status === 'success') {
        //             let categories = response.data;
        //             let categoriesHtml = '';
        //             let itemsHtml = '';
        
        //             categories.forEach(function (category) {
        //                 let categoryId = category.category_uuid; // Unique ID for linking items
        
        //                 // Render category row
        //                 categoriesHtml += `
        //                     <div class="menu-category" id="category-${categoryId}">
        //                         <div class="category-header">
        //                             <img src="${category.category_image}" alt="${category.category_name}" class="category-image">
        //                             <div class="category-info">
        //                                 <h2>${category.category_name}</h2>
        //                                 <p>${category.category_description}</p>
        //                             </div>
        //                         </div>
        //                     </div>`;
        
        //                 // Render items for this category
        //                 let categoryItems = category.items;
        //                 let itemsSection = `<div class="row items-container">`;
        
        //                 categoryItems.forEach(function (item, index) {
        //                     itemsSection += `
        //                         <div class="col-md-4 col-sm-6 item-box" data-category="${categoryId}">
        //                             <h3 class="item-title">${item.item_name}</h3>
        //                             <p class="item-description">${item.item_description}</p>
        //                             <span class="item-price">$${item.item_price}</span>
        //                         </div>`;
        //                 });
        
        //                 itemsSection += `</div>`;
        //                 itemsHtml += itemsSection;
        //             });
        
        //             // Append categories and items to the container
        //             $('#menu-container').html(categoriesHtml + itemsHtml);
        //         } else {
        //             $('#menu-container').html('<p class="error">No categories found</p>');
        //         }
        //     },
        //     error: function (error) {
        //         console.error('Error fetching menu items:', error);
        //         $('#menu-container').html('<p class="error">Failed to load menu. Try again later.</p>');
        //     }
        // });
        
     
        
        $.ajax({
            url: 'actions/actions.php', 
            type: 'POST', 
            dataType: 'json', 
            data: {
                action: 'fetch_services',
            },
            success: function (data) {
                console.log("Services Data:", data);
        
                let servicesHtml = '';
                let navHtml = '';
        
                data.forEach(function (service, index) {
                    servicesHtml += `
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div data-wow-delay="${index * 0.5}s" class="item icon-box-02 wow fadeInUpShort">
                                <div class="wrapper-icon">
                                    <i class="icons ${service.service_icon}"></i>
                                    <span class="number">${service.service_order_number}</span>
                                </div>
                                <h4 class="title">${service.service_title}</h4>
                                <div class="description">${service.service_description}</div>
                            </div>
                        </div>`;
        
                    navHtml += `
                        <li class="swin-transition">
                            <a href="javascript:void(0)" class="testimonial-nav-item">
                                <img src="${service.service_icon}" alt="${service.service_title}" class="img img-fluid swin-transition">
                            </a>
                        </li>`;
                });
        
                $('#services-row').html(servicesHtml);
                // $('#testimonials-container .nav-slider .slides').html(navHtml);
        
                // Initialize slick only if the elements are present
                // if ($('#testimonials-container .main-slider .slides').length > 0) {
                //     var $main_slider = $('#testimonials-container .main-slider .slides');
                //     var $nav_slider = $('#testimonials-container .nav-slider .slides');
        
                //     $main_slider.slick({
                //         animation: 'slide',
                //         slidesToShow: 1,
                //         slidesToScroll: 1,
                //         arrows: false,
                //         asNavFor: $nav_slider
                //     });
        
                //     $nav_slider.slick({
                //         asNavFor: $main_slider,
                //         centerMode: true,
                //         dots: false,
                //         arrows: false,
                //         infinite: true,
                //         slidesToShow: 3,
                //         centerPadding: 0,
                //         slidesToScroll: 1,
                //         focusOnSelect: true
                //     });
                // }
            },
            error: function (error) {
                console.error('Error fetching services:', error);
                $('#services-row').html('<p>Error loading services. Please try again later.</p>');
            }
        });
        

        $.ajax({
            type: "POST",
            url: 'actions/actions.php',
            data: { action: 'fetch_team_members' },
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    console.log('Error: ' + response.error);
                } else {
                    console.log(response);  // Handle the team members data here
                    // Append all team members HTML to the section
                    response.forEach(function(member) {
                        let teamHTML = `
                            <div class="team-item swin-transition wow fadeInLeft">
                                <div class="team-img-wrap">
                                    <div class="team-img"><img src="${member.image_url}" alt="${member.name}" class="img img-fluid"></div>
                                </div>
                                <p class="team-name">${member.name}</p>
                                <p class="team-position">${member.position}</p>
                                <hr>
                                <ul class="socials-nb list-inline">
                                    ${member.facebook_url ? `<li class="list-inline-item"><a href="${member.facebook_url}" target="_blank"><i class="fa fa-facebook"></i></a></li>` : ''}
                                    ${member.twitter_url ? `<li class="list-inline-item"><a href="${member.twitter_url}" target="_blank" ><i class="fa fa-twitter"></i></a></li>` : ''}
                                    ${member.pinterest_url ? `<li class="list-inline-item"><a href="${member.pinterest_url}" target="_blank"><i class="fa fa-pinterest"></i></a></li>` : ''}
                                    ${member.google_plus_url ? `<li class="list-inline-item"><a href="${member.google_plus_url}" target="_blank"><i class="fa fa-google-plus"></i></a></li>` : ''}
                                </ul>
                            </div>
                        `;
                        // Append the team member to the team section
                        $('.swin-sc-team-slider').append(teamHTML);
                    });
        

                    
                    // Initialize the slick slider after appending all team members
                   
             
                    $(".swin-sc-team-slider").slick({
                        dots: false,
                        arrows: true,
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        focusOnSelect: false,
                        nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
                        prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
                        responsive: [
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                }
                            },
                            {
                                breakpoint: 769,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                        ]
                    });

                 
                  

                }
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error: " + error);
            }
        });
        
        //AJAX call to fetch daily specials
        $.ajax({
            type: "POST",
            url: 'actions/actions.php',
            data: { action: 'fetch_daily_specials' },
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    console.log('Error: ' + response.error);
                } else {
                    var specials = response.data; // Access the 'data' property
                    var specialsHtml = '';
                    
                    // Loop through the specials and create HTML with matching structure
                    $.each(specials, function(index, special) {
                        specialsHtml += '<div class="col-md-12">';
                        specialsHtml += '    <div class="item product-01 d-flex">';
                        specialsHtml += '        <div class="item-left"><img src="' + special.image_url + '" alt="" class="img img-fluid">';
                        specialsHtml += '            <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">' + special.name + '</a>';
                        specialsHtml += '                <div class="dot">....................................</div>';
                        specialsHtml += '                <div class="des">' + special.description + '</div>';
                        specialsHtml += '            </div>';
                        specialsHtml += '        </div>';
                        specialsHtml += '        <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>' + special.price + '</span>';
                        // specialsHtml += '            <div class="btn-atc-wrapper"><a href="#" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>';
                        specialsHtml += '        </div>';
                        specialsHtml += '    </div>';
                        specialsHtml += '</div>';
                    });
        
                    // Append the generated HTML to the container
                    $('#specials-container').html(specialsHtml);
        
                    // Initialize Slick Carousel
                    $('.products-01.style-04 .nav-slider').each(function () {
                    
                        var $nav_slider = $(this);
                        var item = $nav_slider.data('item') || 3; // Default to 3 if not set
        
                        $nav_slider.slick({
                            fade: false,
                            dots: false,
                            arrows: true,
                            infinite: false,
                            slidesToShow: item,
                            slidesToScroll: 1,
                            vertical: true,
                            focusOnSelect: false,
                            nextArrow: "<div class='next-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-down'></i></a></div>",
                            prevArrow: "<div class='prev-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-up'></i></a></div>",
                            responsive: [
                                {
                                    breakpoint: 1025,
                                    settings: {
                                        slidesToShow: 2,
                                    }
                                },
                            ]
                        });
        
                        // Bind beforeChange event after Slick initialization
                        $nav_slider.on('beforeChange', function (event, slick, currentSlideIndex, nextSlideIndex) {
                         
                            var currentSlide = ".nav-slider div[data-slick-index='" + currentSlideIndex + "']";
                            var nextSlide = ".nav-slider div[data-slick-index='" + nextSlideIndex + "']";
                            $(this).find(currentSlide).removeClass('animated fadeInUpShort');
                            $(this).find(nextSlide).addClass('animated fadeInUpShort');
                        });
                    });
                } 
            },
            error: function() {
                $('#specials-container').html('<p>Error fetching data. Please try again later.</p>');
            }
        });
        
        
        $.ajax({
            url: 'actions/actions.php',
            type: 'POST',
            dataType: 'json',
            data: { action: 'fetch_featured_blog' }, // Fetch featured blogs
        
            success: function (response) {
                console.log("Fetched featured blogs:", response);
        
                let featuredBlogsHtml = '';
        
                response.data.forEach(function (blog, index) {
                    // Extract date parts
                    let dateObj = new Date(blog.created_at);
                    let day = dateObj.getDate();
                    let month = dateObj.toLocaleString('default', { month: 'short' });
        
                    // Set animation delay dynamically
                    let delay = index * 0.3; 
        
                    featuredBlogsHtml += `
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div data-wow-delay="${delay}s" class="blog-item swin-transition item wow fadeInUpShort">
                                
                                <div class="blog-featured-img">
                                <a href="blog-single.php?id=${blog.id}" >
                                    <img src="${blog.image_url}" alt="${blog.title}" class="img img-fluid" >
                                   </a>
                                    </div>
                                <div class="blog-content">
                                    <div class="blog-date"><span class="day">${day}</span><span class="month">${month}</span></div>
                                    <h3 class="blog-title">
                                        <a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">${blog.title}</a>
                                    </h3>
                                    <p class="blog-description">${truncateText(blog.description, 100)}</p>
                                    <div class="blog-readmore">
                                        <a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                });
        
                // Inject into the featured blog container
                $('#featured-blog-container').html(featuredBlogsHtml);
            },
        
            error: function (error) {
                console.error('Error fetching featured blogs:', error);
                $('#featured-blog-container').html('<p>Could not load featured blogs. Please try again later.</p>');
            }
        });
        
      
        // $.ajax({
        //     type: "POST",
        //     url: 'actions/actions.php',
        //     data: { action: 'fetch_daily_specials' },
        //     dataType: "json",
        //     success: function(response) {
        //         if (response.error) {
        //             console.log('Error: ' + response.error);
        //         } else {
        //             var specials = response.data; // Access the 'data' property
        //             var specialsHtml = '';
        
        //             // Loop through the specials and create HTML with matching structure
        //             $.each(specials, function(index, special) {
        //                 specialsHtml += '<div class="col-md-12">';
        //                 specialsHtml += '    <div class="item product-01 d-flex">';
        //                 specialsHtml += '        <div class="item-left"><img src="' + special.image_url + '" alt="" class="img img-fluid">';
        //                 specialsHtml += '            <div class="content-wrapper"><a class="link-underline link-underline-opacity-0 title">' + special.name + '</a>';
        //                 specialsHtml += '                <div class="dot">....................................</div>';
        //                 specialsHtml += '                <div class="des">' + special.description + '</div>';
        //                 specialsHtml += '            </div>';
        //                 specialsHtml += '        </div>';
        //                 specialsHtml += '        <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>' + special.price + '</span>';
        //                 specialsHtml += '            <div class="btn-atc-wrapper"><a href="#" class="link-underline link-underline-opacity-0 btn-atc"><span>Order</span></a></div>';
        //                 specialsHtml += '        </div>';
        //                 specialsHtml += '    </div>';
        //                 specialsHtml += '</div>';
        //             });
        
        //             // Append the generated HTML to the container
        //             $('#specials-container').html(specialsHtml);
        //             $('#specials-container').trigger('reflow'); // Manually trigger a reflow

        //             // Initialize Slick Slider after a slight delay
        //             setTimeout(function() {
        //                 // Ensure we are targeting the correct element
        //                 var $nav_slider = $('#specials-container'); // Remove '.nav-slider' if it's not part of the HTML
        
        //                 if ($nav_slider.length > 0) {
        //                     $nav_slider.slick({
        //                         fade: false,
        //                         dots: false,
        //                         arrows: true,
        //                         infinite: false,
        //                         slidesToShow: 3, // Change as per your requirement
        //                         slidesToScroll: 1,
        //                         vertical: true,
        //                         focusOnSelect: false,
        //                         nextArrow: "<div class='next-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-down'></i></a></div>",
        //                         prevArrow: "<div class='prev-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-up'></i></a></div>",
        //                         responsive: [
        //                             {
        //                                 breakpoint: 1025,
        //                                 settings: {
        //                                     slidesToShow: 2,
        //                                 }
        //                             }
        //                         ]
        //                     });
        //                 }
        //             }, 500); // Delay Slick initialization by 500ms
        //         }
        //     },
        //     error: function() {
        //         $('#specials-container').html('<p>Error fetching data. Please try again later.</p>');
        //     }
        // });
        
    }

    $('#btn_book_table').on('click', function (e) {
            e.preventDefault();


            // Collect form data
            const formData = {
                username: $('input[id="fullname"]').val(),
                email: $('input[placeholder="Email"]').val(),
                phone: $('input[placeholder="Phone"]').val(),
                people: $('select[placeholder="People"]').val(),
                date: $('input[placeholder="Date"]').val(),
                time: $('select[placeholder="Time"]').val()
            };


            // Send AJAX request
            $.ajax({
                url: 'actions/actions.php',
                type: 'POST',
                data: 
                { action: 'make_reservation' ,
                    username: $('input[id="fullname"]').val(),
                    email: $('input[placeholder="Email"]').val(),
                    phone: $('input[placeholder="Phone"]').val(),
                    people: $('select[placeholder="People"]').val(),
                    date: $('input[placeholder="Date"]').val(),
                    time: $('select[placeholder="Time"]').val(),
    recaptcha: grecaptcha.getResponse() // Include reCAPTCHA response
                },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                    $('input[id="fullname"]').val(""),
                $('input[placeholder="Email"]').val(""),
                    $('input[placeholder="Phone"]').val(""),
                    $('select[placeholder="People"]').val(""),
                $('input[placeholder="Date"]').val(""),
                    $('select[placeholder="Time"]').val(""),
                    $('textarea').val("")

                        alert(response.message);
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function () {
                    alert('An error occurred while making the reservation.');
                }
            });
    });

    $('#btn_subscribe').on('click', function (e) {
            e.preventDefault();
        
            const email = $('#subscribe_email').val().trim();
        
            if (email === '') {
                alert('Please enter your email.');
                return;
            }
        
            $.ajax({
                url: 'actions/actions.php',
                type: 'POST',
                data: { action: 'subscribe', email: email },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        $('#subscribe_email').val('');
                        alert(response.message);
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function () {
                    alert('An error occurred while subscribing.');
                }
            });
    });

    $('#btn_contact_submit').on('click', function (e) {
            e.preventDefault();
        
            // Collect form data
            const contactData = {
                action: 'send_message',
                username: $('input[id="contact_fullname"]').val().trim(),
                email: $('input[placeholder="Email"]').val().trim(),
                phone: $('input[placeholder="Phone"]').val().trim(),
                message: $('textarea[placeholder="Message"]').val().trim(),
    recaptcha: grecaptcha.getResponse() // Include reCAPTCHA response
            };
        
            // Validate fields
            if (!contactData.username || !contactData.email || !contactData.message) {
                alert('Please fill in all required fields.');
                return;
            }
        
            // Send AJAX request
            $.ajax({
                url: 'actions/actions.php',
                type: 'POST',
                data: contactData,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        // Clear input fields
                        $('input[id="contact_fullname"]').val('');
                        $('input[placeholder="Email"]').val('');
                        $('input[placeholder="Phone"]').val('');
                        $('textarea[placeholder="Message"]').val('');
                        alert(response.message);
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function () {
                    alert('An error occurred while sending your message.');
                }
            });
    });
    if (currentUrl.includes('blogs.php')) {   
        $.ajax({
            url: 'actions/actions.php',
            type: 'POST',
            dataType: 'json',
            data: { action: 'fetch_blogs' }, // Fetch blog posts
        
            success: function (response) {
                console.log("Fetched blogs:", response);
        
                let blogsHtml = '';
        
                response.data.forEach(function (blog) {
                    // Extract date parts
                    let dateObj = new Date(blog.created_at);
                    let day = dateObj.getDate();
                    let month = dateObj.toLocaleString('default', { month: 'short' });
        
                    blogsHtml += `
                        <div class="col-md-6">
                            <div class="swin-sc-blog-slider style-02">
                                <div class="main-slider">
                                    <div class="slides">
                                        <div class="blog-item swin-transition">
                                            <div class="blog-featured-img">
                                              <a href="blog-single.php?id=${blog.id}" >
                                                <img src="${blog.image_url}" alt="${blog.title}" class="img img-fluid" >
                                           </a>
                                                </div>
                                            <div class="blog-content">
                                                <div class="blog-date"><span class="day">${day}</span><span class="month">${month}</span></div>
                                                <h3 class="blog-title"><a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">${blog.title}</a></h3>
                                                <p class="blog-description">${truncateText(blog.description, 100)}</p>
                                                <div class="blog-readmore"><a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                });
        
                // Inject into the blog container
                $('#blog-container').html(blogsHtml);
            },
        
            error: function (error) {
                console.error('Error fetching blogs:', error);
                $('#blog-container').html('<p>Could not load blogs. Please try again later.</p>');
            }
        });
        
    }

    if (currentUrl.includes('index.php') || currentUrl.includes('about.php')) {
        $.ajax({
            url: 'actions/actions.php', // PHP file handling all actions
            type: 'POST', // Sending data via POST method
            dataType: 'json', // Expecting JSON response
            data: {
                action: 'fetch_testimonials', // Action name to fetch the testimonials
            },
            success: function (data) {
                console.log("Testimonials Data:", data);
                
                let testimonialsHtml = ''; // Variable to store all testimonials HTML
                let navHtml = ''; // Variable to store the navigation images HTML
        
                // Iterate through each testimonial
                data.forEach(function (testimonial, index) {
                    // Build HTML for each testimonial
                    testimonialsHtml += `
                        <div class="testi-item item">
                            <i class="testi-icon fa fa-quote-left"></i>
                            <div class="testi-content">
                                <p>"${testimonial.testimonial_message}"</p>
                            </div>
                            <div class="testi-info">
                                <span class="name">${testimonial.testimonial_name}</span>
                                <span class="position">${testimonial.testimonial_position}</span>
                            </div>
                        </div>`;
        
                    // Build HTML for the navigation images
                    navHtml += `
                        <li class="swin-transition">
                            <a href="javascript:void(0)" class="testimonial-nav-item">
                                <img src="${testimonial.testimonial_image_url}" alt="${testimonial.testimonial_name}" class="img img-fluid swin-transition">
                            </a>
                        </li>`;
                });
        
                // Inject the generated testimonials HTML into the main slider
                $('#testimonials-container .main-slider .slides').html(testimonialsHtml);
        
                // Inject the generated navigation images HTML
                $('#testimonials-container .nav-slider .slides').html(navHtml);
                $('.swin-sc-testimonial.style-1').each(function () {
                    var $main_slider = $(this).find('.main-slider .slides');
                    var $nav_slider = $(this).find('.nav-slider .slides');
        
                    $main_slider.slick({
                        animation: 'slide',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        asNavFor: $nav_slider
                    });
        
                    $nav_slider.slick({
                        asNavFor: $main_slider,
                        centerMode: true,
                        dots: false,
                        arrows: false,
                        infinite: true,
                        slidesToShow: 3,
                        centerPadding: 0,
                        slidesToScroll: 1,
                        focusOnSelect: true
                    });
                });
        
            },
            error: function (error) {
                console.error('Error fetching testimonials:', error);
                $('#testimonials-container').html('<p>Error loading testimonials. Please try again later.</p>'); // Display error message to the user
            }
        });
    }



    if(currentUrl.includes('reservation.php')){
        $.ajax({
            url: 'actions/actions.php',
            type: 'POST',
            dataType: 'json',
            data: { action: 'fetch_event_blog' }, // Fetch featured blogs
        
            success: function (response) {
                console.log("Fetched event blogs:", response);
        
                let eventBlogsHtml = '';
        
                response.data.forEach(function (blog, index) {
                    // Extract date parts
                    let dateObj = new Date(blog.created_at);
                    let day = dateObj.getDate();
                    let month = dateObj.toLocaleString('default', { month: 'short' });
        
                    // Set animation delay dynamically
                    let delay = index * 0.3; 
        
                    // eventBlogsHtml += `
                    //     <div class="col-md-6 col-sm-12 col-xs-12">
                    //         <div data-wow-delay="${delay}s" class="blog-item swin-transition item wow fadeInUpShort">
                                
                    //             <div class="blog-featured-img">
                    //             <a href="blog-single.php?id=${blog.id}" >
                    //                 <img src="${blog.image_url}" alt="${blog.title}" class="img img-fluid" >
                    //                </a>
                    //                 </div>
                    //             <div class="blog-content">
                    //                 <div class="blog-date"><span class="day">${day}</span><span class="month">${month}</span></div>
                    //                 <h3 class="blog-title">
                    //                     <a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">${blog.title}</a>
                    //                 </h3>
                    //                 <p class="blog-description">${truncateText(blog.description, 100)}</p>
                    //                 <div class="blog-readmore">
                    //                     <a href="blog-single.php?id=${blog.id}"  class="link-underline link-underline-opacity-0 swin-transition">Read More <i class="fa fa-angle-double-right"></i></a>
                    //                 </div>
                    //             </div>
                    //         </div>
                    //     </div>`;

                        eventBlogsHtml += `
                        <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="swin-sc swin-sc-event swin-transition wow fadeInLeft">
                        <div class="swin-sc-event-inner">
                          <div class="event-info clearfix">
                            <div class="event-date"><span class="day">${day}</span><span class="month">${month}</span></div>
                            <div class="event-title"><a href="#" class="link-underline link-underline-opacity-0 swin-transition">${blog.title}</a></div>
                          </div>
                          <div class="event-featured-img">
                          <a href="blog-single.php?id=${blog.id}" >
                          <img src="${blog.image_url}" alt="${blog.title}" class="img img-fluid mx-auto d-block">
                           </a>
                          </div>
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
                        
                        
                        `;

                });
        
                // Inject into the featured blog container
                $('#event-blog-container').html(eventBlogsHtml);
            },
        
            error: function (error) {
                console.error('Error fetching featured blogs:', error);
                $('#event-blog-container').html('<p>Could not load event blogs. Please try again later.</p>');
            }
        });


        $.ajax({
            url: 'actions/actions.php', 
            type: 'POST', 
            dataType: 'json', 
            data: {
                action: 'fetch_services',
            },
            success: function (data) {
                console.log("Services Data:", data);
        
                let servicesHtml = '';
                let navHtml = '';
        
                data.forEach(function (service, index) {
                    servicesHtml += `
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div data-wow-delay="${index * 0.5}s" class="item icon-box-02 wow fadeInUpShort">
                                <div class="wrapper-icon">
                                    <i class="icons ${service.service_icon}"></i>
                                    <span class="number">${service.service_order_number}</span>
                                </div>
                                <h4 class="title">${service.service_title}</h4>
                                <div class="description">${service.service_description}</div>
                            </div>
                        </div>`;
        
                    navHtml += `
                        <li class="swin-transition">
                            <a href="javascript:void(0)" class="testimonial-nav-item">
                                <img src="${service.service_icon}" alt="${service.service_title}" class="img img-fluid swin-transition">
                            </a>
                        </li>`;
                });
        
                $('#services-row').html(servicesHtml);
           
            },
            error: function (error) {
                console.error('Error fetching services:', error);
                $('#services-row').html('<p>Error loading services. Please try again later.</p>');
            }
        });
    }
});
function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}
