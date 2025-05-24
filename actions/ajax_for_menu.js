$(document).ready(function () {

    // Fetch menu items when the page loads
    fetchMenu();

    function fetchMenu() {
        $.ajax({
            url: 'actions/actions.php', // Update with the actual path
            type: 'POST',
            data: { action: 'fetch_menu' },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    console.error(response.error);
                    return;
                }

                $(".menu-categories").empty(); // Container for categories
                $(".menu-items-container").empty(); // Container for items

                // Loop through categories and append them dynamically
                response.forEach(category => {
                    let categoryHTML = `
                    
                           
                        <div class="item" data-category-uuid="${category.category_uuid}">
                            <div class="cat-icons ">
                                <i class="icons swin-icon-pasta"></i>
                                <h5 class="cat-title">${category.category_name}</h5>
                            </div>
                        </div>
                    `;
                    $(".menu-categories").append(categoryHTML);

                    let itemsHTML = `
                        <div class="tab-content d-flex flex-wrap" data-category-uuid="${category.category_uuid}" >
                      
                            <div class="col-md-5 col-12">
                                <div class="cat-wrapper">
                                    <div class="item">
                                        <img src="assets/images/product/${category.category_image}" alt="" class="img img-fluid img-full">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-12">
                                <div class="products full-infor">
                    `;

                    category.items.forEach(item => {
                        itemsHTML += `
                            <div class="item product-01">
                                <div class="item-left">
                                    <h5 class="title">${item.item_name}</h5>
                                    <div class="des">${item.item_description}</div>
                                </div>
                                <div class="item-right">
                                    <span class="price woocommerce-Price-amount amount">
                                        <span class="price-symbol">$</span>${item.item_price}
                                    </span>
                                </div>
                            </div>
                        `;
                    });

                    itemsHTML += `</div></div></div>`;
                    $(".menu-items-container").append(itemsHTML);

                 
                });
// Initialize Slick for menu categories after content is loaded
// initializeSlick();
setTimeout(initializeSlick, 500);
                // Attach click event after dynamically loading content
                // attachClickEvent();

                // $(".menu-categories .item").first().trigger("click");

            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", error);
            }
        });
    }

    function attachClickEvent() {
        $(".item").off("click").on("click", function () {
            let categoryUUID = $(this).data("category-uuid");

           // Find the parent `.slick-slide` and mark it as current
        $(".menu-categories .slick-slide").removeClass("slick-current"); // Remove from all
        $(this).closest(".slick-slide").addClass("slick-current"); // Add to the clicked one

           
            // Show only the matching section
            $(".section_for_menu_items").each(function () {
                if ($(this).data("category-uuid") === categoryUUID) {
                    $(this).show();
                
                }else{
                    $(this).hide();
 

                }
            });
        });
    }

    function initializeSlick() {
        var $sliderContainer = $('.products-01.style-02');
        if ($sliderContainer.length === 0) {
            // alert("Slick initialization skipped: No elements found for .products-01.style-02");
            return;
        }
    
        $sliderContainer.each(function () {
            var $main_slider = $(this).find('.main-slider');
            var $nav_slider = $(this).find('.nav-slider');
    
            if (!$main_slider.length || !$nav_slider.length) {
                // alert("Slick initialization skipped: Missing .main-slider or .nav-slider");
                return;
            }
    
            var slide_toshow = $main_slider.attr('data-slide-toshow') || 4;
    
            $main_slider.slick({
                slidesToShow: parseInt(slide_toshow),
                slidesToScroll: 1,
                arrows: true,
                infinite: false,
                asNavFor: $nav_slider,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            dots: true,
                        }
                    },
                ]
            });
    
            $nav_slider.slick({
                fade: true,
                asNavFor: $main_slider,
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                focusOnSelect: true
            });
        });
    }
    
    
});
