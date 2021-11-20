<div class="box-content">
  <h2><i class="fas fa-pen"> Editar Cliente</i></h2>

  <form method="post" enctype="multipart/form-data">
    <?php
        if (isset($_POST['acao'])) {
            //enviei o meu formulario
            $usuario = new Usuario();
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $cpf = $_POST['cpf'];
           
                if ($usuario->atualizarUsuarios($nome, $senha, $cpf)) {
                    Painel::alert('sucesso', 'Atualizado com sucesso!');
                } else {
                    Painel::alert('erro', 'Ocorreu um erro ao atualizar');
                }
            }
        

        ?>
    <div class="form-group">
      <label>Nome: </label>
      <input type="text" name="nome"></input>
    </div>
    <div class="form-group">
      <label>CPF: </label>
      <input type="text" name="cpf"></input>
    </div>
    <!--form-group-->
    <div class="form-group">
      <label>Senha: </label>
      <input type="password" name="senha" unrequired></input>
    </div>
    <!--form-group-->

    <div class="form-group">
      <label>Imagem </label>
      <input type="file" name="img"></input>
      <input type="hidden" name="img_atual" value="<?php echo $_SESSION['img']; ?>">
    </div>
    <!--form-group-->
    <div class="form-group">
      <input type="submit" name="acao" value="Editar"></input>
    </div>
    <!--form-group-->
  </form>


</div>
<!--box-content-->