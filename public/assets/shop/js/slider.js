$(document).ready(function() {

    $("#yokoso-new-products").owlCarousel({
        autoplay: false,
        navigation : true,
        loop:true,
        nav:true,
        slideSpeed : 300,
        paginationSpeed : 400,
        navClass: ["large ui icon red button yokoso-owl-nav-left","large ui icon red button yokoso-owl-nav-right"],
        navText: ["<i class=\"arrow left icon\"></i>","<i class=\"arrow right icon\"></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            768:{
                items:2,
                nav:true,
            },
            1024:{
                items:3,
                nav:true,
            }
        }
    });

    $("#yokoso-banners").owlCarousel({
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        navigation : true,
        loop:true,
        nav:true,
        animateOut: 'fadeOut',
        slideSpeed : 300,
        paginationSpeed : 400,
        navClass: ["large ui icon red button yokoso-owl-nav-left","large ui icon red button yokoso-owl-nav-right-fix"],
        navText: ["<i class=\"arrow left icon\"></i>","<i class=\"arrow right icon\"></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:1,
            },
            1024:{
                items:1,
            }
        }
    });
});
