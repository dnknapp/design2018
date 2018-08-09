//Give Project Grid Titles the same height
$(function() {
    $('.title-wrapper').matchHeight({ 
        byRow: true,
        property: 'min-height' 
    });
});

// New Loading Animations using Greensock
    var tl = new TimelineMax();
 
    tl
    .set('.load-fade-in', {y:30})
    .staggerTo('.load-fade-in', 1, {autoAlpha:1, y:0}, .2);


// Scrolling animations
    
    // Add animation classes to Project page images
    $('.portfolio-img').addClass('scroll-fade-in');

    // init controller
    var controller = new ScrollMagic.Controller();

    // loop through all elements with class item
    $('.scroll-fade-in').each(function() {

        // build a timeline
        var tlScroll = new TimelineMax();
        tlScroll
        .set($(this), {y:30})
        .to($(this), 1, {autoAlpha:1, y:0}); // we're animating a child so that scrollmagic doesn't re-trigger during animation
    
        // build a scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            triggerHook: .8, // start the animation lower in the viewport
            reverse: false // play animation only once
        })
        .setTween(tlScroll)
        .addTo(controller);
    });