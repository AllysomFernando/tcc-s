<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<header>   
        <a href="#" class="logo"><img src="<?php echo INCLUDE_PATH; ?>imagens/logo.png" width="100px"></a><!--ficara a logo-->
        <nav class="desktop">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>JOGOS">JOGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>MEUS_CODIGOS">MEUS CÓDIGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>MINHA_CARTEIRA">MINHA CARTEIRA</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>SOBRE">SOBRE</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>CONTATOS">CONTATOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>LOGIN">LOGIN</a></li>
            </ul>
        </nav>
        <nav class="search">
        <div>
          <input type="text" placeholder="What're ya buying?">
          <i class="fas fa-search"></i><!-- icone de procura-->
        </div> 
        </nav>  
         <nav class="mobile">
           <div class="botao-menu-mobile">
           <i class="fas fa-bars"></i><!--botao menu quando diminui a tela -->
           </div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>JOGOS">JOGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>MEUS_CODIGOS">MEUS CÓDIGOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>MINHA_CARTEIRA">MINHA CARTEIRA</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>SOBRE">SOBRE</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>CONTATOS">CONTATOS</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>LOGIN">LOGIN</a></li>     
            </ul>
        </nav>    
</header>
<!--parte da freewknd-->
<div class="container">
  <div class="content">
   <a href="#"> <img src="<?php echo INCLUDE_PATH; ?>imagens/cyberpunk.jpg" class="cyber" width="400px"></a>
  </div>
  <div class="sales1">
  <a href="#"><img src="<?php echo INCLUDE_PATH; ?>imagens/valala.jpg" class="valha" width="400px"></a>
  </div>
</div>   

<!-- linha horizontal-->

<hr class="hr5">

<section class="allgames"><!--outros games-->
  


<div class="game1 ">
  <a href="#"><img src="<?php echo INCLUDE_PATH; ?>imagens/revilage.jpg" class="revi" width="800px"></a>
</div>

<div class="desc_revi">
<p class="revi_desc"> Continuando de onde o risco biológico de Resident
    Evil 7 parou, Resident Evil Village é o oitavo grande episódio da série Resident Evil. Tecnologia de 
    Próxima Geração RE Engine emparelhado com poder de console de próxima
    geração fornecerá gráficos fotorrealistas, trazendo a aldeia sombria e seus 
    residentes assombrados para a vida.<p>
</div>

<!--

<div class="game2"> 
  <a href="#"><img src="<?php echo INCLUDE_PATH; ?>imagens/skyrim.jpg" class="" width="200px"></a>
</div>

-->
<!--
<div class="game3">
<img src="<?php echo INCLUDE_PATH; ?>imagens/cyberpunk.jpg" width="200px">
</div>
<div class="gamer4">
<img src="<?php echo INCLUDE_PATH; ?>imagens/farcry5.jpg" width="200px">
</div>
</div>
</section>
-->
<footer>
    <div class="footer">
      <div class="sec aboutus">
        <h2> Sobre Nós</h2>
        <p>Somos um projeto fictício para conclusão de curso, uma empresa para vendas de jogos e envios de códigos, somos em dois programadores e um designer gráfico, nosso contato está no topo do site.</p>
        <ul class="sci">
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-github"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
      </ul>
      </div>
      <div class="sec quickLinks">
        <h2>Quick Links</h2>
        <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">FAQ</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">Politicas de Privacidade</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">Ajuda</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">Termos de Condições</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>#">Contatos</a></li>
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
</footer>
<div class="copyrightText">
  <p>Copyright © Ruddy Store. Todos os direitos reservados.</p>
</div>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body> 
</html>