$(function(){

    $('aside ul li').on('click', function(){
        $(this).find('ul').css('display','block');
    });

});