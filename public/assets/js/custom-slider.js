// Customo Slider Start Here
$('.gallery-carousel').owlCarousel({
    loop: true,
    rewind: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left' aria-hidden='true'></i>",
        "<i class='fa fa-caret-right' aria-hidden='true'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
})

$('.news-carousel').owlCarousel({
    loop: true,
    rewind: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left' aria-hidden='true'></i>",
        "<i class='fa fa-caret-right' aria-hidden='true'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        800: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
})
//   Custom Slider End Here

//Pre-Loader
$("#loading").delay(2000).fadeOut(500);
$("#loading-center").on("click",function() {
    $("#loading").fadeOut(500);
});

/*----------------------------------------------
-----------Counter Function  --------------------
-------------------------------------------------*/
var counter = $('.counter');
if (counter.length) {
   counter.appear(function() {
       counter.each(function() {
           var e = $(this),
               a = e.attr("data-count");
           $({
               countNum : e.text()
           }).animate({
               countNum : a
           }, {
               duration : 8e3,
               easing : "linear",
               step : function() {
                   e.text(Math.floor(this.countNum));
               },
               complete : function() {
                   e.text(this.countNum);
               }
           });
       });
   });
}
