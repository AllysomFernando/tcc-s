
<form method="post" enctype="multipart/form-data">
  <?php
  if (isset($_POST['acao'])) {
    //enviei o meu formulario
    $login = $_POST['cpf'];
    $nome = $_POST['nome_cliente'];
    $senha = $_POST['senha'];

    if ($login == '') {
      Painel::alertSite('erro', 'O login está vázio');
    } else if ($nome == '') {
      Painel::alertSite('erro', 'O nome está vázio');
    } else if ($senha == '') {
      Painel::alertSite('erro', 'A senha está vázia');
    } else {
      //podemos cadastrar!
      if (Usuario::userExist($login)) {
        Painel::alertSite('erro', 'O login já existe!');
      } else {
        //apenas cadastrar no banco de dados
        $usuario = new Usuario();
        $usuario->cadastrarUsuarios($login, $nome, $senha);
       
     
        header("Location: login");
      }
    }
  }

  ?>
<img class="unlock" src="<?php echo INCLUDE_PATH; ?>imagens/unlock.svg">
  <div class="container-1">
    <div class="container-cadastro">
        <img class="mulher-cadastro" src="<?php echo INCLUDE_PATH; ?>imagens/mulher.svg">
        <h2 class="h2"> Bem Vindo</h2>
        <div class="input-div one">
          <div>
            <input name="cpf" type="text" placeholder="CPF">
          </div>
        </div>
        <div>
          <div class="input-div three">
          <input name="nome_cliente" type="text" placeholder="NOME">
          </div>
        </div>
        <div class="input-div two">
          <div>
            <input name="senha" required type="password" placeholder="SENHA">
          </div>
        </div>
        <input type="submit" name="acao" class="btn" value="cadastrar-se">
    </div>
  </div>
  </div>
</form>