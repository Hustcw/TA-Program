$(function(){
    // nav收缩展开
    $('.nav-item1>a').on('click',function(){
        if (!$('.nav1').hasClass('nav-mini1')) {
            if ($(this).next().css('display') == "none") {
                //展开未展开
                $('.nav-item1').children('ul').slideUp(300);
                $(this).next('ul').slideDown(300);
                $(this).parent('li').addClass('nav-show1').siblings('li').removeClass('nav-show1');
            }else{
                //收缩已展开
                $(this).next('ul').slideUp(300);
                $('.nav-item1.nav-show1').removeClass('nav-show1');
            }
        }
    });
    //nav-mini切换
    $('#mini').on('click',function(){
        if (!$('.nav1').hasClass('nav-mini1')) {
            $('.nav-item1.nav-show1').removeClass('nav-show1');
            $('.nav-item1').children('ul').removeAttr('style');
            $('.nav1').addClass('nav-mini1');
        }else{
            $('.nav1').removeClass('nav-mini1');
        }
    });
});