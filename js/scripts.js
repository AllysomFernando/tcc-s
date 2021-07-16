$(function(){
    //Aqui vou colocar todo o nosso codigo de javascript
    $('nav.mobile').click(function(){
        //o que vai acontecer quando clicar na nav mobile
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true){
            alert('Vamos Abrir');
                 listaMenu.fadeIn();
        }
            
        else{
            alert('Vamos fechar');
            listaMenu.fadeOut();
        }
            
    })


    //fas fa-window-close
})

