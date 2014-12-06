$(function() {
    $('.sharebutton').click(function(){
        $('#body').fadeIn(200,function(){
            $('.windows').animate({'top':'20px'},200);
        });
        return false;
    });
    $('.boxclose').click(function(){
        $('.windows').animate({'top':'-200px'},500,function(){
            $('.windows').fadeOut('fast');
        });
    });
 
});
