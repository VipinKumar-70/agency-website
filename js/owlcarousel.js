$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 5, // Number of items to display in the carousel
        loop: true, // Infinite loop
        margin: 10, // Margin between items
        nav: false, // Navigation arrows
        dots: true, // Navigation dots
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1 // Number of items to display on small screens
            },
            576: {
                items: 2 // Number of items to display on medium screens
            },
            776: {
                items: 3 // Number of items to display on large screens
            },
            992: {
                items: 5
            }
        }

    });
});
