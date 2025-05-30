// <!-- services slider -->
$(document).ready(function () {
    // First, initialize the slider without arrows
    $('.servicer-slider').slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false, // Disable built-in arrows
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    // Add custom button handlers
    $('.servies-prev-btn').on('click', function(e) {
        e.preventDefault();
        $('.servicer-slider').slick('slickPrev');
    });
    
    $('.servies-next-btn').on('click', function(e) {
        e.preventDefault();
        $('.servicer-slider').slick('slickNext');
    });
    
    // Update button states function
    function updateButtonStates() {
        var slick = $('.servicer-slider').slick('getSlick');
        var currentSlide = slick.currentSlide;
        
        // Disable/enable prev button
        if (currentSlide === 0) {
            $('.servies-prev-btn').addClass('slick-disabled').css('opacity', '0.5');
        } else {
            $('.servies-prev-btn').removeClass('slick-disabled').css('opacity', '1');
        }
        
        // Disable/enable next button
        if (currentSlide >= slick.slideCount - slick.options.slidesToShow) {
            $('.servies-next-btn').addClass('slick-disabled').css('opacity', '0.5');
        } else {
            $('.servies-next-btn').removeClass('slick-disabled').css('opacity', '1');
        }
    }
    
    // Handle hover effect for buttons
    $('.servies-prev-btn, .servies-next-btn').each(function() {
        // By default, show only the first image (black icon)
        $(this).find('img:nth-child(2)').hide();
        
        // On hover, switch to white icon
        $(this).hover(
            function() {
                // On mouse enter
                $(this).find('img:nth-child(1)').hide();
                $(this).find('img:nth-child(2)').show();
            },
            function() {
                // On mouse leave
                $(this).find('img:nth-child(1)').show();
                $(this).find('img:nth-child(2)').hide();
            }
        );
    });
    
    // Update button states initially
    updateButtonStates();
    
    // Update button states on slide change
    $('.servicer-slider').on('afterChange', function() {
        updateButtonStates();
    });
});