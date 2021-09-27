<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel de controle</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icone-->
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>logo.ico" type="image/x-icon" />
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> 
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
</head>    
<body>
<div class="menu">
    <div class="menu-wraper">
    <div class="box-usuario">
        <?php
            if($_SESSION['img'] == ''){

        ?>
                 <div class="avatar-usuario">
                     <i class="fas fa-user"></i>
                 </div><!--avatar-usuario-->
        <?php  }else{ ?>
                <div class="imagem-usuario">
                     <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img']; ?>"/>
                 </div><!--avatar-usuario-->
        <?php } ?>
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!--nome-usuario-->
    </div><!--box-usuario-->
    <div class="items-menu">
        <h2>Cadastro</h2>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-produtos">Cadastrar Produtos</a>
        <a href="">Cadastrar Promoções</a>
        <a href="">Cadastrar Generos</a>
        <a href="">Cadastrar Clientes</a>
        <h2>Gestão</h2>
        <a href="">Listar Jogos</a>
        <a href="">Listar Promoções</a>
        <a href="">Listar Generos</a>
        <h2>Administração do Painel</h2>
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
        <a href="">Adicionar Usuários</a>
        <h2>Configuração Geral</h2>
        <a href="">Editar</a>
    </div><!--items-menu-->
    </div><!--wraper-->
</div><!--menu-->
<header>
        <div class="center">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div><!--menu-btn-->
        <div class="loggout">
         <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-home"></i> <span> Página Inicial</span></a>
         <div style="padding: 0 20px;display:inline;"></div>
         <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i> <span>Sair</span> </a>
        </div><!--loggout-->

            <div class="clear"></div>
        </div><!-- center-->
</header>

<div class="content">

       <?php Painel::loadPage(); ?>

</div><!--content-->
<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
</body>
</html>