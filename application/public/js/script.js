$('.sub-document').slideUp();
$('.sub-article').slideUp();
$(document).on('ready', function () {
    $('.sub-menu-document').click(function () {
        $('.sub-document').slideToggle(300);
    });
    $('.sub-menu-article').click(function () {
        $('.sub-article').slideToggle(300);
    });
});
