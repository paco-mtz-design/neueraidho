// Masonry activation + imagesLoaded with jQuery
var $container = $('.masonry');
// initialize Masonry after all images have loaded
$container.imagesLoaded( function() {
  $container.masonry({
    columnWidth: '.masonry_column',
    gutter: '.masonry_gutter',
    itemSelector: '.masonry_item'
    });
});

// LAZY LOAD
$(document).scroll(function () {
        var y = $(this).scrollTop();
        var h = window.innerHeight;
        $('.hidden_element').each(function () {
        var t = $(this).offset().top - h;
        if (y > t) {
            $(this).animate({'opacity':'1', 'margin-top':'0px'},400);
        }
    });
});

// LAZY LOAD APPLIED
// HOME
$("ul.log > li").addClass("hidden_element");
// ABOUT
$("#about > div, #about .people_founders > div, #about .people_team > div ").addClass("hidden_element");
$("#about > div:nth-child(1), #about .wrap .section_pad").removeClass("hidden_element");
// WORK
$("#recent_work > .project_wrapper .bl-party-three-w-captions ul > li").addClass("hidden_element");
$("#recent_work > .project_wrapper .bl-party-four-w-captions ul > li").addClass("hidden_element");
// RECENT
$("#loader ul.log > li:nth-child(-n+5)").removeClass("hidden_element");
