$(function(){
        var curSlide = 0;
        var maxSlide = $('.content').length -1;
        var delay = 3;
        initSlider();
        changeSlide();

        function initSlider(){
            $('.content').hide();
            $('.content').eq(0).show();
        }
            function changeSlide(){
                setInterval(function(){
                    $('.content').eq(curSlide).fadeOut(2000);
                  curSlide++;
                    if(curSlide > maxSlide)
                    curSlide = 0;
                    $('.content').eq(curSlide).fadeIn(2000);
                },delay *1000);
            }
})