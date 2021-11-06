<?php
if (isset($_POST['acao'])) {
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $sql = MySql::conectar()->prepare("SELECT * FROM cliente WHERE cpf = ? AND senha = ?");
  $sql->execute(array($cpf, $senha));
  if ($sql->rowCount() == 1) {
    $info = $sql->fetch();
    //logamos com sucesso
    $_SESSION['login'] = true;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senha'] = $senha;
    header('Location: http://localhost/tcc/tcc-allysu-victor/');

    die();
  } else {
    header('Location: http://localhost/tcc/tcc-allysu-victor/login');
    echo '<div class="error-box">CPF ou senha incorretos</div>';
    
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Ruddy Store</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image:type" content="logo.png">
  <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
</head>

<body>
  <img class="unlock" src="<?php echo INCLUDE_PATH; ?>imagens/unlock.svg">
  <div class="container-1">
    <div class="container-login">
      <form method="post">
        <img class="mulher" src="<?php echo INCLUDE_PATH; ?>imagens/mulher.svg">
        <h2 class="h2"> Bem Vindo</h2>
        <div class="input-div one">
          <div>
            <input name="cpf" type="number" placeholder="CPF">
          </div>
        </div>

        <div class="input-div two">
          <div>
            <input name="senha" required type="password" placeholder="SENHA">
          </div>
        </div>
        <input type="submit" name="acao" class="btn" value="login">
      </form>
    </div>
  </div>
  </div>
</body>

</html>