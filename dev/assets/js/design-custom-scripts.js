//Give Isotope Titles the same height. All manually called in Isotope JS
$(function() {
    $('.title-wrapper').matchHeight({ 
        byRow: true,
        property: 'min-height' 
    });
});

// Loading Animations

    //$('#intro').children().addClass('velocity');
    $.Velocity.RegisterEffect("transition.bounceUpInSmall", {
        defaultDuration: 1500,
                    calls: [
                        [{opacity: [1, 0], translateY: [0, 50]}, 0.60, {easing: "spring"}]
                    ]
    });
    
    //$('#intro-img img').delay(500).velocity('transition.bounceUpInSmall');
    // $('#intro-img img').delay(500).velocity('transition.slideUpIn', 1000 );
    $('.velocity').velocity('transition.slideUpIn', { duration: 1000, stagger: 150 } );

// Scrolling Animations
// Any scrolling animations on homepage conflict with Isotope
// Add animation classes to Project page images
    $('.portfolio-img, .portfolio-img-half').addClass('animation-element slide-up');
    
    /* Animate portfolio images */
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        /* use these line in place of the next one to enable the effect on scrolling back up
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
        */  
        if (element_top_position <= window_bottom_position) {
        $element.addClass('in-view');
        } else {
        $element.removeClass('in-view');
        }
    });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');