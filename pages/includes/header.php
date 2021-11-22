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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- google fonts abaixo -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- css abaixo-->
  <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
  <!--SEO-->
  <meta name="description" content="Ruddy Store - Todos os tipos de jogos e afins você encontra aqui" />
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
  switch ($url) {
    case 'sobre':
      echo '<target target="sobre" />';
      break;
  }
  ?>
  <div class="sucesso">Formulário enviado com sucesso</div>
  <div class="overlay-loading">
    <img src="  imagens/ajax-loader.gif">
  </div>
  <header>
    <a href="<?php echo INCLUDE_PATH; ?>home" class="logo"><img src="imagens/logo.png" width="100px"></a>
    <!--ficara a logo-->
    <nav class="desktop">
      <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>home">HOME</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>generos">GENEROS</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>jogos">JOGOS</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE</a></li>
        <li><a realtime="contato" href=" <?php echo INCLUDE_PATH; ?>contato">CONTATOS</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>login">LOGIN</a></li>
        <li><a  href="<?php echo INCLUDE_PATH; ?>registro">REGISTRO</a></li>
      
				<li><a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho(<?php echo \models\homeModel::getTotalItemsCarrinho(); ?>)</a></li>
				<li style="background: #ec268f;"><a href="<?php echo INCLUDE_PATH ?>finalizar">Finalizar Pedido</a></li>
		
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
        <i class="fas fa-bars"></i>
        <!--botao menu quando diminui a tela -->
      </div>
      <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>home">HOME</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>home">GENEROS</a></li>
        <li><a  href="<?php echo INCLUDE_PATH; ?>jogos">JOGOS</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE</a></li>
        <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">CONTATOS</a></li>
        <li><a realtime="login" href="<?php echo INCLUDE_PATH; ?>login">LOGIN</a></li>
        <li><a realtime="registro" href="<?php echo INCLUDE_PATH; ?>registro">REGISTRO</a></li>
      </ul>
      </ul>
    </nav>
    <div class="clear">
    </div>
  </header>
  <div class="container-principal">
    <?php

    if (file_exists('pages/' . $url . '.php')) {
      include('pages/' . $url . '.php');
    } else {
      //podemos fazer o que quiser, pois a pagina não existe.
      if ($url != 'sobre') {
        $pagina404 = true;
        include('pages/404.php');
      } else {
        include('pages/home.php');
      }
    }
    ?>
  </div>