$(function(){

    $('body').on('submit','form',function(){
        var form = $(this);
        $.ajax({
            beforeSend: function(){
                $('.overlay-loading').fadeIn();
            },
            url:include_path+'ajax/formularios.php',
            method: 'post', 
            dataType: 'json',
            data:form.serialize()
        }).done(function(data){
            if(data.sucesso){
                //console.log("email enviado com sucesso");
                $('.overlay-loading').fadeOut();
                $('.sucesso').fadeIn();
                setTimeout(function(){
                    $('.sucesso').fadeOut();
                },3000)
            }else{
               //console.log("Ocorreu um erro ao enviar o email  ");
               $('.overlay-loading').fadeOut();
            }
        });
        return false;
    })
})
       

