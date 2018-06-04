$(document).ready(function(){
    $('.menu-item-has-children').click(function() {
        $('.menu-children').toggle();
    });

    $('.main-content').click(function() {
        $('.menu-children').css('display', 'none')
    });

    $('.btn-search').click(function() {
       $('.modal-search').css('display', 'block');
       $('body').addClass('modal-open');
    });

    $('.modal-search-btn-close').click(function() {
        $('.modal-search').css('display', 'none');
        $('body').removeClass('modal-open');
    });
});