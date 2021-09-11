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
    <?php
        if(isset($_POST['acao'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
            $sql->execute(array($user,$password));
            if($sql-rowCount() == 1){
                //logamos com sucesso;
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                header('location: 'INCLUDE_PATH_PAINEL);
            }else{
                //falhou
                echo '<div class="erro-box">Usuário ou senha incorretos</div>';
            }
        }
    ?>
    <form method="post" action="">
        <img  class="avatar" src="<?php echo INCLUDE_PATH; ?>imagens/avatar.svg">
        <h2 class="h2"> Bem Vindo</h2>
        <div class="input-div one">
            <div class="i">
                <i class ="fas fa-user"></i>
            </div>
        <div> 
            <input id="cpf" required type="text"  placeholder="CPF" >
        </div>
    </div>   
        <div class="input-div two">
            <div class="i">
                <i class="fas fa-lock"></i>
            </div>
        <div>  
            <input id="senha" required type="password" placeholder="SENHA">
        </div>
    </div> 
        <a class="a"href="#">Deseja-se cadrastrar-se?</a>
        <input type="hidden" name="identificador" value="form_login"/>
        <input type="submit" class="btn" value="login">
    </form>  
    </div>
</div>
</div>
</body>
</html>