<?php
if (isset($_GET['loggout'])) {
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
                if ($_SESSION['img'] == '') {

                ?>
        <div class="avatar-usuario">
          <i class="fas fa-user"></i>
        </div>
        <!--avatar-usuario-->
        <?php  } else { ?>
        <div class="imagem-usuario">
          <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
        </div>
        <!--avatar-usuario-->
        <?php } ?>
        <div class="nome-usuario">
          <p><?php echo $_SESSION['nome']; ?></p>
          <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
        </div>
        <!--nome-usuario-->
      </div>
      <!--box-usuario-->
      <div class="items-menu">
        <!--pessoas autorizadas-->
        <h2 <?php verificaPermissaoMenu(1);
                    ('') ?>>Cadastro </h2>

        <!--usuarios-->
        <h2 <?php verificarPermissaoPagina(0);
                    ('seu-perfil') ?>>Seu Perfil</h2>
        <!--usuarios-->


        <a <?php selecionadoMenu('cadastrar-jogos'); ?>
          <?php verificaPermissaoMenu(1);
                                                                ('cadastar-jogos') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-jogos">Cadastrar Jogos</a>
        <a
          <?php selecionadoMenu('cadastrar-generos'); ?><?php verificaPermissaoMenu(1);
                                                                    ('cadastrar-generos') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-generos">Cadastrar
          Generos</a>
        <a
          <?php selecionadoMenu('cadastrar-destaques'); ?><?php verificaPermissaoMenu(1);
                                                                    ('cadastrar-destaques') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-destaques">Cadastrar-destaques</a>

        <h2 <?php verificaPermissaoMenu(1);
                    ('') ?>>Gestão</h2>

        <a <?php selecionadoMenu('listar-jogos'); ?> <?php verificaPermissaoMenu(1);
                                                                ('listar-jogos') ?>href="listar-jogos">Listar Jogos</a>
        <a <?php selecionadoMenu('listar-destaques'); ?>
          <?php verificaPermissaoMenu(1);
                                                                    ('listar-destaques') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>listar-destaques">Listar destaques</a>
        <a <?php selecionadoMenu('listar-generos'); ?> <?php verificaPermissaoMenu(1);
                                                                ('listar-generos') ?>
          href="<?php echo INCLUDE_PATH_PAINEL ?>listar-generos">Listar Generos</a>

        <h2 <?php verificaPermissaoMenu(2);
                    ('') ?>>Administração do Painel</h2>

        <a
          <?php selecionadoMenu('editar-usuario') ?><?php verificaPermissaoMenu(2);
                                                                ('editar-usuario') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar
          Usuário</a>
          <a
          <?php selecionadoMenu('editar-cliente') ?><?php verificaPermissaoMenu(2);
                                                                ('editar-cliente') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>editar-cliente">Editar Cliente</a>
                                                                <a
          <?php selecionadoMenu('editar-cliente') ?><?php verificaPermissaoMenu(2);
                                                                ('editar-jogos') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>editar-jogos">Editar Jogos</a>
                                                                   <a
          <?php selecionadoMenu('editar-genero') ?><?php verificaPermissaoMenu(2);
                                                                ('editar-genero') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>editar-genero">Editar Generos</a>
        <a
          <?php selecionadoMenu('adicionar-usuario') ?><?php verificaPermissaoMenu(2);
                                                                ('adicionar-usuario') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar
          Usuário</a>

          <a
          <?php selecionadoMenu('deletar-usuarios') ?><?php verificaPermissaoMenu(2);
                                                                ('deletar-usuarios') ?>href="<?php echo INCLUDE_PATH_PAINEL ?>deletar-usuarios">Gerenciar Clientes</a>

        <h2 <?php verificaPermissaoMenu(2);
                    ('') ?>>Configuração Geral</h2>
        <a <?php selecionadoMenu('editar-site') ?> <?php verificaPermissaoMenu(2);
                                                            ('') ?>href="">Editar Site</a>
        <!--pessoas autorizadas-->

        <!--usuarios-->

        <!--usuarios-->

      </div>
      <!--items-menu-->
    </div>
    <!--wraper-->
  </div>
  <!--menu-->
  <header>
    <div class="center">
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
      <!--menu-btn-->
      <div class="loggout">
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-home"></i> <span> Página Inicial</span></a>
        <div style="padding: 0 20px;display:inline;"></div>
        <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i> <span>Sair</span> </a>
      </div>
      <!--loggout-->

      <div class="clear"></div> 
    </div><!-- center-->
  </header>

  <div class="content">

    <?php Painel::loadPage(); ?>

  </div>
  <!--content-->
  <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
  <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>

</html>