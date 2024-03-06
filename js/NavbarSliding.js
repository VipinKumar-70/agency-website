$(document).ready(function () {
    //Show then hide ddown menu on hover

    $('.main-nav').hover(function () {
        $(this).children('.dropdown-menu').stop(true).slideDown(500);
    }, function () {
        $(this).children('.dropdown-menu').stop(true).slideUp(100);
    });
}); 