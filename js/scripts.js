$(function(){
    //Aqui vou colocar todo o nosso codigo de javascript
    $('nav.mobile').click(function(){
        //o que vai acontecer quando clicar na nav mobile
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true){
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fas fa-bars');
                icone.addClass('fas fa-window-close');
                listaMenu.fadeIn();
        }  
        else{
          var icone =$('.botao-menu-mobile').find('i');
           icone.removeClass('fas fa-window-close');
           icone.addClass('fas fa-bars');
           listaMenu.fadeOut();
        }
    });

    //fas fa-bars abrir 
    //fas fa-window-close fechar


    if($('target').length > 0){
        // O elmento existe portanto vai dar o scroll
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll},1500);
    }

    carregarDinamico();
        function carregarDinamico(){
            $('[realtime]').click( function(){
                var pagina = $(this).attr('realtime');
                $('.container-principal').hide();
                $('.container-principal').load(include_path+'pages/'+pagina+'.php');
                setTimeout( function(){
                    initialize();
                    addMarker(-24.9480783,-53.4681957,'',"Aonde nós estudamos",undefined,false); 
                },1000);
               $('.container-principal').fadeIn(1000);
                return false;
            }) 
        }
}) 

 