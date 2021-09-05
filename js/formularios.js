$(function(){

    $('form').submit(function(){
        var form = $(this);
        $.ajax({
            url:include_path+'ajax/formularios.php',
            method: 'post', 
            dataType: 'json',
            data:form.serialize()
        }).done(function(data){
            console.log(data.retorno);
            //console.log("Retorno feito com sucesso");
        });
        return false;
    })

})
