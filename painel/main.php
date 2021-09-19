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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> 
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
</head>    
<body>
<div class="menu">
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
</div><!--menu-->
<header>
        <div class="center">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div><!--menu-btn-->
        <div class="loggout">
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i> <span>Sair</span> </a>
            </div><!--loggout-->

            <div class="clear"></div>
        </div><!-- center-->
</header>

<div class="content">

        <div class="box-content" left w100>
            
        </div><!--box-content-->

</div><!--content-->
</body>
</html>