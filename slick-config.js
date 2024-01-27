$(document).ready(function () {
    $('.marcas-img').slick({
        infinite: true,
        arrows: false,
        centerMode: true,
        touchMove: false,
        focusOnSelect: false,
        pauseOnFocus: false,
        pauseOnTouch: false,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 1800,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    })
})
