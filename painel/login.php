<?php
if (isset($_COOKIE['lembrar'])) {
    $user = $_COOKIE['user'];
    $password = $_COOKIE['password'];
    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND senha = ?");
    $sql->execute(array($user, $senha));
    if ($sql->rowCount() == 1) {
        $info = $sql->fetch();
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        $_SESSION['cargo'] = $info['cargo'];
        $_SESSION['nome'] = $info['nome'];
        $_SESSION['img'] = $info['img'];
        header('Location: ' . INCLUDE_PATH_PAINEL);
        die();
    }
}

?>

<?php
if (isset($_POST['acao'])) {
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND senha = ?");
    $sql->execute(array($user, $senha));
    if ($sql->rowCount() == 1) {
        $info = $sql->fetch();
        //logamos com sucesso
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        $_SESSION['cargo'] = $info['cargo'];
        $_SESSION['nome'] = $info['nome'];
        $_SESSION['img'] = $info['img'];
        if (isset($_POST['lembrar'])) {
            setcookie('lembrar', true, time() + (60 * 60 * 24), '/');
            setcookie('user', $user, time() + (60 * 60 * 24), '/');
            setcookie('password', $password, time() + (60 * 60 * 24), '/');
        }
        header('Location: ' . INCLUDE_PATH_PAINEL);
        die();
    } else {
        //falhou
        echo '<div class="error-box">Usuário ou senha incorretos</div>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Painel de controle</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
</head>

<body>
  <img class="unlock" src="<?php echo INCLUDE_PATH; ?>imagens/unlock.svg">
  <div class="container-1">
    <div class="container-login">
      <form method="post">
        <img class="mulher" src="<?php echo INCLUDE_PATH; ?>imagens/mulher.svg">
        <h2 class="h2"> Bem Vindo</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <input name="user" type="text" placeholder="LOGIN">
          </div>
        </div>
        <div class="input-div two">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div>
            <input name="senha" required type="password" placeholder="SENHA">
          </div>
        </div>
        <input type="submit" name="acao" class="btn" value="login">
        <div class="form-group-login">
          <label>Lembrar-me</label>
          <input type="checkbox" name="lembrar">
        </div>
      </form>
    </div>
  </div>
  </div>
</body>

</html>