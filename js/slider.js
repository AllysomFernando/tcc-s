$(function(){
        var curSlide = 0;
        var maxSlide = $('.content').length -1;
        var delay = 3;
        initSlider();
        changeSlide();

        function initSlider(){
            $('.content').hide();
            $('.content').eq(0).show();
            for(var i = 0; i < maxSlide+1; i++){
                var content = $('.bullets').html();
                if(i == 0)
                    content+='<span class="active-sliders"></span>';
                else
                    content+='<span></span>';
                    $('.bullets').html(content);             
            }
        }
            function changeSlide(){
                setInterval(function(){
                    $('.content').eq(curSlide).stop().fadeOut(1000);
                  curSlide++;
                    if(curSlide > maxSlide)
                    curSlide = 0;
                    $('.content').eq(curSlide).stop().fadeIn(2000);
                    //tricar bullets da navegação do sliders
                    $('.bullets span').removeClass('active-sliders');
                    $('.bullets span').eq(curSlide).addClass('active-sliders');
                },delay *1000);
            }

        $('body').on('click','.bullets span', function(){
           var currentBullet = $(this);
           $('.content').eq(curSlide).stop().fadeOut(1000);
           curSlide = currentBullet.index();
           $('.content').eq(curSlide).stop().fadeIn(1000);
           $('.bullets span').removeClass('active-sliders');
           currentBullet.addClass('active-sliders');      
        });
         
})