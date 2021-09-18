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
    

</div>
<header>
        <div class="center">
        <div class="loggout">
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i></a>
            </div><!--loggout-->

            <div class="clear"></div>
        </div><!-- center-->
</header>
</body>
</html>