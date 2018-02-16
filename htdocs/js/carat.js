"use strict";

jQuery(document).ready(function () {


    _initGridCarousel('.grid-carousel');
    _initCheapGridCarousel('.cheap-carousel');


    _initGallery();


});


function _initGallery() {
    //this is image slider of detail page
    $('.gallery').bxSlider({
        pagerSelector: '#gallery-pager .pager',
        mode: 'vertical',
        touchEnabled: false,
        adaptiveHeight: true,
        responsive: true,
        nextSelector: '#gallery-pager .next',
        nextText: '',
        prevSelector: '#gallery-pager .prev',
        prevText: '',
        buildPager: function (slideIndex) {
            var selector = '.thumbnail-' + slideIndex;
            return $(selector).html();
        }
    });
}//for detail


function _initGridCarousel(selector) {

    $(selector).bxSlider({
        responsive: true,
        auto: true,
        adaptiveHeight: true,
        maxSlides: 4,
        minSlides: 2,
        slideWidth: 300,
        pagerType: 'short',
        pager: false,
        controls: true,
        moveSlides: 1,
        pagerSelector: '.grid-carousel-pager',
        nextSelector: '.grid-carousel-pager .next',
        nextText: '',
        prevSelector: '.grid-carousel-pager .prev',
        prevText: ''

    });
}//for hot


function _initCheapGridCarousel(selector) {

    $(selector).bxSlider({
        responsive: true,
        auto: true,
        adaptiveHeight: true,

        maxSlides: 4,
        minSlides: 2,
        slideWidth: 300,

        pagerType: 'short',
        pager: false,
        controls: true,
        moveSlides: 1,
        pagerSelector: '.cheap-carousel-pager',
        nextSelector: '.cheap-carousel-pager .next',
        nextText: '',
        prevSelector: '.cheap-carousel-pager .prev',
        prevText: ''
    });
}//for cheap





