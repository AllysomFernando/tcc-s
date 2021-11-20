<div class="box-content">
  <h2><i class="fas fa-pen"> Editar Cliente</i></h2>

  <form method="post" enctype="multipart/form-data">
    <?php
        if (isset($_POST['acao'])) {
            //enviei o meu formulario
            $usuario = new Usuario();
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
        
                if ($usuario->atualizarUsuarios($cpf, $nome, $senha)) {
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

 
    <!--form-group-->
    <div class="form-group">
      <input type="submit" name="acao" value="Editar"></input>
    </div>
    <!--form-group-->
  </form>


</div>
<!--box-content-->