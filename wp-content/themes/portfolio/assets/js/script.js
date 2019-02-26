$(function () {
    let tabId = $('.features-gallery a:first-child').attr('href');
    $('.features-gallery li:first-child ').addClass('active');
    $(tabId).addClass('active');
    $('.features-gallery').on('click', "li a", function (e) {
        e.preventDefault();
        $('.features-gallery__content > div').removeClass('active');
        $('.features-gallery li').removeClass('active');
        let atrId = $(this).attr('href');
        $(this).parent().addClass('active');
        $(atrId).addClass('active');
    });
});