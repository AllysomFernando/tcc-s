$(function(){
    //Aqui vou colocar todo o nosso codigo de javascript
    $('nav.mobile').click(function(){
        //o que vai acontecer quando clicar na nav mobile
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();
    })
})

