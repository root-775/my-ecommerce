jQuery(document).ready(function($) {

    // Preloader start

    $(document).ready(function() {
        setTimeout(function() {
            $('#preloader').fadeToggle();
        }, 2000);
    });

    // Preloader end

    $(".wish-icon i").click(function() {
        $(this).toggleClass("fa-heart fa-heart-o");
    });

    $(document).on('click', '.cart', function() {
        $(".shopping-cart").toggle();
    });

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('#back2Top').fadeIn("slow");
        } else {
            $('#back2Top').fadeOut("slow");
        }
    });
    $(document).ready(function() {
        $("#back2Top").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });

    });
    /*Scroll to top when arrow up clicked END*/


    // product listing sidebar start
    $(document).ready(function() {
        $(".toggle_button").click(function() {
            $("#content-mobile").toggle();
        });
    });
    // product listing sidebar end

    $('.owl-carousel-products').owlCarousel({
        margin: 25,
        nav: true,


        navText: [
            '<div class="carousel-control left carousel-control-prev"><i class="fa fa-angle-left"></i></div>',
            '<div class="carousel-control right carousel-control-next"><i class="fa fa-angle-right"></i></div>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            },
            1299: {
                items: 5
            },
            1600: {
                items: 6
            }


        }
    });

    $('.owl-carousel-category').owlCarousel({
        margin: 25,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            },
            1299: {
                items: 5
            },
            1600: {
                items: 6
            }


        }
    });

    // home slider js

    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(showDivs, 500);
    }

});

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        x[slideIndex - 1].style.display = "block";
    }

}