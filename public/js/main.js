$(document).ready(function () {
    "use strict";

    //DESKTOP MENU
    $(".list-menu").on("mouseenter mouseleave", function () {
        $(this).toggleClass("hover");
    });

    //MOSAICO
    var $isotope1 = $('#mosaic').imagesLoaded(function () {
        $('#mosaic').isotope({
            packery: {
                columnWidth: ".mosaic-sizer",
                rowHeight: ".mosaic-sizer",
                gutter: ".gutter-sizer"
            },
            layoutMode: 'packery',
            itemSelector: ".mosaic-item",
            percentPosition: true
        });
    });

    //MASONRY TRI-MENU
    var $isotope2 = $('#tri-menu').imagesLoaded(function () {
        $('#tri-menu').isotope({
            packery: {
                columnWidth: ".trimenu-sizer",
                rowHeight: ".trimenu-sizer"
            },
            layoutMode: 'packery',
            itemSelector: ".tri-menu-item",
            percentPosition: true
        });
    });

    $('.col6').on('click', function () {
        $('.col').removeClass('col-md-4 col-md-6 col-md-3');
        $('.col').addClass('col-md-6');
        $('.display ul li a').removeClass('active');
        $('.col6').addClass('active');
    });
    $('.col4').on('click', function () {
        $('.col').removeClass('col-md-4 col-md-6 col-md-3');
        $('.col').addClass('col-md-4');
        $('.display ul li a').removeClass('active');
        $('.col4').addClass('active');
    });
    $('.col3').on('click', function () {
        $('.col').removeClass('col-md-4 col-md-6 col-md-3');
        $('.col').addClass('col-md-3');
        $('.display ul li a').removeClass('active');
        $('.col3').addClass('active');
    });



    // ESTRELAS AVALIAÇÃO
    $('#product-review-options-1').barrating({
        theme: 'fontawesome-stars',
        readonly: true,
        initialRating: 4
    });
    $('#product-review-options-2').barrating({
        theme: 'fontawesome-stars',
        readonly: true,
        initialRating: 3
    });

    // ZOOM IMG
    $('.easyzoom').zoom();

    //DETALHE TABS
    $("#detail-tabs").tabs({
        active: 1
    });
});
