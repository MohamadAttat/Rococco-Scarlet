$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: 'actions/actions.php',
        data: { action: 'fetch_team_members' },
        dataType: "json",
        success: function (response) {
            if (response.error) {
                console.log('Error: ' + response.error);
            } else {
                let teamHTML = '';
                response.forEach(function (member) {
                    teamHTML += `
                        <div class="team-item swin-transition">
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
                });

                $('.swin-sc-team-slider').html(teamHTML);

                // Destroy existing slick instance if exists
                if ($('.swin-sc-team-slider').hasClass('slick-initialized')) {
                    $('.swin-sc-team-slider').slick('unslick');
                }

                // Wait for images to load before initializing Slick
                $('.swin-sc-team-slider img').on('load', function () {
                    observeSlider(); // Attach observer after content loads
                }).each(function () {
                    if (this.complete) $(this).trigger('load');
                });
            }
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error: " + error);
        }
    });

    function initSlickSlider() {
        $('.swin-sc-team-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 800,
            easing: "ease-in-out",
            useTransform: true,
            cssEase: "linear",
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

    function observeSlider() {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    initSlickSlider();  // Initialize when section is visible
                    observer.disconnect(); // Stop observing once initialized
                }
            });
        }, { threshold: 0.3 }); // Trigger when 30% of the section is visible

        observer.observe(document.querySelector('.swin-sc-team-slider'));
    }
});
