var swiper = new Swiper(".slide-content", {
    slidesPerview: 1,
    spaceBetween: 30,
    slidesperGroup: 1,
    loop: true,
    loopFillFGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});
