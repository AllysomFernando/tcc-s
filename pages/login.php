<?php

        if(isset($_POST['acao'])){
            $user = $_POST['cpf'];
            $senha = $_POST['senha'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `cliente` WHERE cpf = ? AND senha = ?");
            $sql->execute(array($cpf,$senha));
            if($sql->rowCount() == 1){
                $info = $sql->fetch();
                //logamos com sucesso
                $_SESSION['login'] = true;
                $_SESSION['cpf'] = $cpf;
                $_SESSION['senha'] = $senha;
                $_SESSION['nome_cliente'] = $info['nome_cliente'];
                $_SESSION['img'] = $info['img'];
                header('Location: '.INCLUDE_PATH);
                die();
            }else{
                //falhou
                echo '<div class="error-box">CPF ou senha incorretos</div>';
            }
        }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
</head>    
<body>
<img class="unlock" src="<?php echo INCLUDE_PATH; ?>imagens/unlock.svg">
<div class="container-1">
<div class="container-login">
    <form method="post">
        <img  class="mulher" src="<?php echo INCLUDE_PATH; ?>imagens/mulher.svg">
        <h2 class="h2"> Bem Vindo</h2>
        <div class="input-div one">
            <div class="i">
                <i class ="fas fa-user"></i>
            </div>
        <div> 
            <input name="cpf"  type="text"  placeholder="CPF">
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
        <input type="submit" name="acao" class="btn"  value="login">
    </form>  
    </div>
</div>
</div>
</body>
</html>