/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function ($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('data-target')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

    $('#top-left-container').html('<iframe src="https://ghbtns.com/github-btn.html?user=pi0&repo=LinuxFestival&type=watch&count=true&size=small&v=2" frameborder="0" scrolling="0" width="160px" height="20px"></iframe>');

})(jQuery); // End of use strict

function initmap() {
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(35.703928, 51.408322),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel:false
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)


    }

    google.maps.event.addDomListener(window, 'load', initialize);

}

var last = [];

var update_presentations = function () {

    for (var i = 1; i < 3; i++) {

        var val = $('input[name=day'+i+']:checked').val();


        var p = $('.day'+i+'-presentation');

        if (val == 'no') {
            //no presentation
            p.prop('checked',false)
        }
        else if (val == 'basic'){
            //public only
            p.prop('checked',false)
            $('.day'+i+'-presentation.p0').prop('checked',true)
        }
        else {
            //all
            p.prop('checked',true)
        }

        if(last[i] != val) {
            if (val == 'basic')
                $('input[value="basic"]').prop('checked', true)
            if (val == 'kernel')
                $('input[value="kernel"]').prop('checked', true)
            if (val == 'python')
                $('input[value="python"]').prop('checked', true)
        }

        last[i] = val
    }

}