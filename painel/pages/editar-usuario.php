
<div class="box-content">
<h2><i class="fas fa-pen"> Editar Usuário</i></h2>

<form method="post" enctype="multipart/form-data">
    <?php   
        if(isset($_POST['acao'])){
            //enviei o meu formulario
            $usuario = new Usuario();
            $nome = $_POST['nome'];

            $senha = $_POST['senha'];
            $img = $_FILES['img'];
            $img_atual = $_POST['img_atual'];            
            
            if($img['name'] != ''){
                //Existe o upload da img
                if(Painel::imagemValida($img)){
                    Painel::deleteFile($img_atual);
                    $img = Painel::uploadFile($img);
                        if($usuario->atualizarUsuario($nome,$senha,$img)){
                            $_SESSION['img'] = $img;
                            
                            Painel::alert('sucesso','Atualizado com sucesso, junto com a imagem!');
                        }else{
                            Painel::alert('erro','Ocorreu um erro ao atualizar junto com a imagem');
                        }
                }else{
                    Painel::alert('erro','o formato da img não é válido');
                }
            }else{
                $img = $img_atual;
                if($usuario->atualizarUsuario($nome,$senha,$img)){
                    Painel::alert('sucesso','Atualizado com sucesso!');
                }else{
                    Painel::alert('erro','Ocorreu um erro ao atualizar');
                }
            }
        }

    ?>
    <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" required"></input>
    </div><!--form-group-->
    <div class="form-group">
        <label>Senha: </label>
        <input type="password" name="senha" required "></input>
    </div><!--form-group-->
        
    <div class="form-group">
        <label>Imagem </label>
        <input type="file" name="img"></input>
        <input type="hidden" name="img_atual" value="<?php echo $_SESSION['img']; ?>">
    </div><!--form-group-->
    <div class="form-group">
        <input type="submit" name="acao" value="Editar"></input>
    </div><!--form-group-->
</form>


</div><!--box-content-->