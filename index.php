<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icone -->
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>logo.ico" type="image/x-icon" />
    <title>Ruddy Store - Loja de jogos </title>
    <!--fontawesom link abaixo-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous"> 
    <!-- google fonts abaixo -->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- css abaixo-->
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <!--SEO-->
    <meta name="description" content="Ruddy Store - Todos os tipos de jogos e afins você encontra aqui"/>
    <!--SMO-->
    <meta property="og=title" content="Ruddy Store - Loja de jogos">
    <meta property="og:site_name" content="Ruddy Store">
    <meta property="og:description" content="Ruddy Store - Todos os tipos de jogos e afins você encontra aqui">
    <meta property="og:url" content="https://ruddystore.com">
    <meta property="og:img" content="RUDDY STORE PNG.png">
    <meta property="og:image:type" content="logo.png">
<title>HOME</title>
</head>
<body>
  <base base="<?php echo INCLUDE_PATH; ?>" />
  <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home';
      switch($url) {
          case'sobre':
            echo '<target target="sobre" />';
            break;
      }
  ?>
  
<header>   
        <a href="<?php echo INCLUDE_PATH; ?>home" class="logo"><img src="imagens/logo.png" width="100px"></a><!--ficara a logo-->
        <nav class="desktop">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>home">HOME</a></li>
                <li><a realtime="jogos" href="<?php echo INCLUDE_PATH; ?>jogos">JOGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE</a></li>
                <li><a realtime="contato" href=" <?php echo INCLUDE_PATH; ?>contato">CONTATOS</a></li>
                <li><a realtime="login"href="<?php echo INCLUDE_PATH; ?>login">LOGIN</a></li>
                <li><a realtime="registro" href="<?php echo INCLUDE_PATH; ?>registro">REGISTRO</a></li>
            </ul>
        </nav>
        <nav class="search">
        <div>
          <input type="text" placeholder="O que procuras?">
          <i class="fas fa-search"></i><!-- icone de procura-->
        </div> 
        </nav>  
         <nav class="mobile">
           <div class="botao-menu-mobile">
           <i class="fas fa-bars"></i><!--botao menu quando diminui a tela -->
           </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>home">HOME</a></li>
                <li><a realtime="jogos" href="<?php echo INCLUDE_PATH; ?>jogos">JOGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE</a></li>
                <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">CONTATOS</a></li>
                <li><a realtime="login"href="<?php echo INCLUDE_PATH; ?>login">LOGIN</a></li>
                <li><a realtime="registro" href="<?php echo INCLUDE_PATH; ?>registro">REGISTRO</a></li>
            </ul>
            </ul>
        </nav>    
        <div class="clear">
        </div>
</header>
<div class="container-principal">
<?php

      if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
      }else{
//podemos fazer o que quiser, pois a pagina não existe.
        if($url != 'sobre'){
          $pagina404 = true;
          include('pages/404.php');
        }else{
          include('pages/home.php');
        }  
      }
?>
 </div>   
<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
<div class="footer">
  <div id="sobre"class="sec aboutus">
    <h2> Sobre Nós</h2>
    <p>Somos um projeto fictício para conclusão de curso, uma empresa para vendas de jogos e envios de códigos, somos em dois programadores e um designer gráfico, nosso contato está para tirar a sua duvida está logo abaixo e para enviar basta clicar em contatos.</p>
    <ul class="sci">
    <li><a href="https://linktr.ee/rddystore"><i class="fab fa-facebook-square"></i></a></li>
    <li><a href="https://linktr.ee/rddystore"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://linktr.ee/rddystore"><i class="fab fa-github"></i></a></li>
    <li><a href="https://linktr.ee/rddystore"><i class="fab fa-twitter-square"></i></a></li>
  </ul>
  </div>
  <div class="sec quickLinks">
    <h2>Quick Links</h2>
    <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>#">FAQ</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>#">Politicas de Privacidade</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>#">Ajuda</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>#">Termos de Condições</a></li>
    </ul>
 </div> 
 <div class="sec contact">
   <h2>Informações para Contatos</h2>
   <ul class="info">
        <li> 
          <span><i class="fas fa-map-marker-alt"></i></span>
          <span>R. Natal, 2800 - Centro <br>
          Cascavel - PR</span>
        </li>
        <li> 
          <span><i class="fas fa-phone-square-alt"></i></span>
          <p><a href="tel: 45 99944-7017">(45) 99944-7017</a>
          <br>
          <a href="tel:(45) 99916-1429">(45) 99916-1429</a></p>
        </li>
        <li> 
        <span><i class="far fa-envelope"></i></span>
          <p><a href="mailto:allysom.renczenczen18@gmail.com">allysom.renczenczen18@gmail.com</a></p>
        </li>
    </ul>
 </div>
</div> 
<div class="copyrightText">
  <p>Copyright © Ruddy Store. Todos os direitos reservados.</p>
</div>
</footer>

<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script> 
<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
<script type="text" src="<?php echo INCLUDE_PATH; ?>js/main.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
<?php
      if($url == 'home' || $url ==''){   
?>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php } ?>
<?php
      if($url == 'contato'){   
?>
<?php    }  ?>
<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body> 
</html>