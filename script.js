$(function(){

    $('.menu-name').hover(function(){


        $(this).css('background','linear-gradient(#a9a9a9, #3a3a3a)');
    },function(){
        $(this).css('background','linear-gradient(#a9a9a9, #3a3a3a)');
    });

    $('.menu-name').click(function(){

        var menu = $(this).attr('id')

        if($(menu).hasClass('open')) {
            $(menu).slideUp(300);
            $(menu).removeClass('open');
        } else {
            $('.open').slideUp(300);
            $('.open').removeClass('open');
            $(menu).slideDown(300);
            $(menu).addClass('open');
        }
    });
});