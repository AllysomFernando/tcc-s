<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" enctype="multipart/form-data">
  <?php
  if (isset($_POST['acao'])) {
    //enviei o meu formulario
    $login = $_POST['cpf'];
    $nome = $_POST['nome_cliente'];
    $senha = $_POST['senha'];

    if ($login == '') {
      Painel::alert('erro', 'O login está vázio');
    } else if ($nome == '') {
      Painel::alert('erro', 'O nome está vázio');
    } else if ($senha == '') {
      Painel::alert('erro', 'A senha está vázia');
    } else {
      //podemos cadastrar!
      if (Usuario::userExist($login)) {
        Painel::alert('erro', 'O login já existe!');
      } else {
        //apenas cadastrar no banco de dados
        $usuario = new Usuario();
        $usuario->cadastrarUsuarios($login, $nome, $senha);
        Painel::alert('sucesso', 'O cadastro do usuário ' . $login . ' foi feito com sucesso');
      }
    }
  }


  ?>
  <div class="form-group">
    <label>Login: </label>
    <input type="number" name="cpf"></input>
  </div>
  <!--form-group-->

  <div class="form-group">
    <label>Nome: </label>
    <input type="text" name="nome_cliente"></input>
  </div>
  <!--form-group-->

  <div class="form-group">
    <label>Senha: </label>
    <input type="password" name="senha"></input>
  </div>
  <!--form-group-->

  <!--form-group-->
  <div class="form-group">
    <input type="submit" name="acao" value="Cadastrar"></input>
  </div>
  <!--form-group-->
</form>