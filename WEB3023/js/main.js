/**
 * Đóng/mở menu trên mobile
 */
$('.header__btn').on('click', function () {
    $(this).toggleClass('header__btn--active')
    $('.header__nav').toggleClass('header__nav--active')
})

/**
 * Quay lại đầu trang
 */
$('.footer__back').on('click', function () {
    $('body, html').animate({
        scrollTop: 0
    }, 50)
})

/**
 * Mở thanh tìm kiếm trên mobile
 */
$('.header__search-btn').on('click', function () {
    $('.header__search').addClass('header__search--active')
})

/**
 * Đóng thanh tìm kiếm trên mobile
 */
$('.header__search-close').on('click', function () {
    $('.header__search').removeClass('header__search--active')
})