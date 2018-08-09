$(function(){
    if($('div').hasClass('yrly-animation')){ // run the animation only in this div. Prevents errors on other pages.

    var planetSmall = document.getElementById('planet-small');
    var planetMed = document.getElementById('planet-med');
    var planetBig = document.getElementById('planet-big');
    var phone = document.getElementById('phone');
    var moonBBack = document.getElementById('moon-b-back');
    var moonBFront = document.getElementById('moon-b-front');
    var moonFBack = document.getElementById('moon-f-back');
    var moonFFront = document.getElementById('moon-f-front');
    var orbitBack = document.getElementById('orbit-back');
    var orbitFront = document.getElementById('orbit-front');

    // Create a main timeline
    var mainTl = new TimelineMax({repeat:-1});

    //Add sub-timelines to main timeline
    mainTl.add(animPhone())
    .add(animPlanetBig(), 0)
    .add(animPlanetSmall(), 0)
    .add(animPlanetMed(), 0)
    .add(animMoon(), 0)
    .add(animOrbit(), 0)
    ;

    // Sub-timelines
    function animPlanetBig(){
        var tl = new TimelineMax({repeat:-1, yoyo:true});
        tl.set(planetBig, {transformOrigin:'50%, 50%'})
        .fromTo(planetBig, 1, {
            y:3,
            scaleX:1.03, 
            scaleY:.97
            }, {
            y:-3,    
            scaleX:.97, 
            scaleY:1.03,
            ease: Power1.easeInOut
            })
        return tl;
    }

    function animPhone(){
        var tl = new TimelineMax({repeat:-1, yoyo:true});
        tl.fromTo(phone, 2, {y:3}, {y:-3, ease: Power1.easeInOut})
        return tl;
    }

    function animPlanetSmall(){
        var tl = new TimelineMax({repeat:-1, yoyo:true});
        var jumpPath = [ {x:-60, y:10},{x:-10, y:-50}, {x:40, y:10} ];
        tl
        .set(planetSmall, {x:-60, y:10, transformOrigin:'50%, 50%'})
        .fromTo(planetSmall, .4, {scaleX:1.2, scaleY:.9}, {scaleX:1, scaleY:1, ease:Power4.easeOut})
        .fromTo(planetSmall, .4, {scaleX:1, scaleY:1}, {scaleX:1.2, scaleY:.9, ease:Power4.easeIn})
        .to(planetSmall, .8, {
            bezier: {
                curviness: 1,
                values: jumpPath
            },
            ease: SlowMo.ease.config(0, 0.3, false)
        }, 0)
        return tl;
    }

    function animPlanetMed(){
        var tl = new TimelineMax({repeat:-1, repeatDelay:3});
        tl.set(planetMed, {transformOrigin:'50%, 50%'})
        // anticipate spin
        .to(planetMed, 1, {
            rotation:20,
        })
        // spin
        .to(planetMed, 2, {
            rotation:-360,
            delay:.5,
            //yoyo: true
            ease: Elastic.easeOut.config(.5, 0.3)
        })
        return tl;
    }

    function animMoon(){
        var tl = new TimelineMax({repeat:-1});
        tl.set([moonBBack, moonBFront, moonFBack, moonFFront], {transformOrigin:'50%, 50%'})
        .to([moonBBack, moonBFront, moonFBack, moonFFront], 2, {x:-44, y:-44, ease:Power1.easeInOut})
        .set([moonBFront, moonFFront], {autoAlpha:0}) // make the moon pass behind the earth
        .to([moonBBack, moonBFront, moonFBack, moonFFront], 2, {x:0, y:0, ease:Power1.easeInOut})
        return tl;
    }

    function animOrbit(){
        var tl = new TimelineMax({repeat:-1});
        tl.set([orbitBack, orbitFront], {transformOrigin:'50%, 50%'})
        .set(orbitFront, {autoAlpha:0}) // earth passes behind sun
        .to([orbitBack, orbitFront], 5, {x:104, y:-237, ease:Power1.easeInOut})
        .set(orbitFront, {autoAlpha:1}) // earth passes in front of sun
        .to([orbitBack, orbitFront], 5, {x:0, y:0, ease:Power1.easeInOut})
        return tl;
    }
}
});