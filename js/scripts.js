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
    })

    //fas fa-bars abrir 
    //fas fa-window-close fechar

})

 