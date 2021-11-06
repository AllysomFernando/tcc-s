<?php
$usuariosOnline = Painel::listarUsuariosOnline();
$pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
$pegarVisitasTotais->execute();

$pegarVisitasTotais = $pegarVisitasTotais->rowCount();

$pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
$pegarVisitasHoje->execute(array(date('Y-m-d')));

$pegarVisitasHoje = $pegarVisitasHoje->rowCount();

?>

<div class="box-content w100">
  <h2 <?php verificaPermissaoMenu(1);
        ('') ?>><i class="fas fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA; ?></h2>
  <div <?php verificaPermissaoMenu(1);
            ('') ?>class="box-metricas">
    <div <?php verificaPermissaoMenu(1);
                ('') ?> class="box-metrica-single">
      <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="box-metrica-wraper">
        <h2 <?php verificaPermissaoMenu(1);
                    ('') ?>>Usuários Online</h2>
        <p <?php verificaPermissaoMenu(1);
                    ('') ?>><?php echo count($usuariosOnline); ?></p>
      </div>
      <!--box-metrica-wrapper-->
    </div>
    <!--box metrica single-->
    <div <?php verificaPermissaoMenu(1);
                ('') ?>class="box-metrica-single">
      <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="box-metrica-wraper">
        <h2 <?php verificaPermissaoMenu(1);
                    ('') ?>>Visitas Hoje</h2>
        <p <?php verificaPermissaoMenu(1);
                    ('') ?>><?php echo $pegarVisitasTotais; ?></p>
      </div>
      <!--box-metrica-wrapper-->
    </div>
    <!--box metrica single-->
    <div <?php verificaPermissaoMenu(1);
                ('') ?>class="box-metrica-single">
      <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="box-metrica-wraper">
        <h2 <?php verificaPermissaoMenu(1);
                    ('') ?>>Total de Visitas</h2>
        <p <?php verificaPermissaoMenu(1);
                    ('') ?>><?php echo $pegarVisitasHoje; ?></p>
      </div>
      <!--box-metrica-wrapper-->
    </div>
    <!--box metrica single-->
    <div <?php verificaPermissaoMenu(1);
                ('') ?>class="clear"></div>
  </div>
  <!--box metrica-->
</div>
<!--box-content-->

<div <?php verificaPermissaoMenu(1);
        ('') ?> class="box-content w100">
  <h2 <?php verificaPermissaoMenu(1);
        ('') ?>><i class="fab fa-firefox-browser"></i> Usuários Online no Site</h2>
  <div <?php verificaPermissaoMenu(1);
            ('') ?> class="table-responsive">
    <div <?php verificaPermissaoMenu(1);
                ('') ?>class="row">
      <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="col">
        <span <?php verificaPermissaoMenu(1);
                        ('') ?>>IP</span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                    ('') ?> class="col">
        <span <?php verificaPermissaoMenu(1);
                        ('') ?>>Ultima Ação</span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                    ('') ?> class="clear"></div>
    </div>
    <!--row-->
    <?php
        foreach ($usuariosOnline as $key => $value) {
            verificaPermissaoMenu(1);
        ?>
    <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="row">
      <div <?php verificaPermissaoMenu(1);
                        ('') ?>class="col">
        <span <?php verificaPermissaoMenu(1);
                            ('') ?>><?php echo $value['ip'] ?></span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                        ('') ?> class="col">
        <span <?php verificaPermissaoMenu(1);
                            ('') ?>><?php echo date('d/m/Y H:i:s', strtotime($value['ultima_acao'])) ?></span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                        ('') ?>class="clear"></div>
    </div>
    <!--row-->
    <?php
            verificaPermissaoMenu(1);
        }
        ?>
  </div>
  <!--table-responsive-->
</div>

<!--box-content-->
<div <?php verificaPermissaoMenu(1);
        ('') ?> class="box-content w100">
  <h2 <?php verificaPermissaoMenu(1);
        ('') ?>><i class="fab fa-firefox-browser"></i> Usuários do Painel</h2>
  <div <?php verificaPermissaoMenu(1);
            ('') ?> class="table-responsive">
    <div <?php verificaPermissaoMenu(1);
                ('') ?>class="row">
      <div <?php verificaPermissaoMenu(1);
                    ('') ?>class="col">
        <span <?php verificaPermissaoMenu(1);
                        ('') ?>>Nome</span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                    ('') ?> class="col">
        <span <?php verificaPermissaoMenu(1);
                        ('') ?>>Cargo</span>
      </div>
      <!--col-->
      <div <?php verificaPermissaoMenu(1);
                    ('') ?> class="clear"></div>
    </div>
    <!--row-->
    <?php
        $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
        $usuariosPainel->execute();
        $usuariosPainel = $usuariosPainel->fetchAll();
        foreach ($usuariosPainel as $key => $value) {

        ?>
    <div class="row">
      <div class="col">
        <span><?php echo $value['user'] ?></span>
      </div>
      <!--col-->
      <div class="col">
        <span><?php echo pegaCargo($value['cargo']); ?></span>
      </div>
      <!--col-->
      <div class="clear"></div>
    </div>
    <!--row-->
    <?php

        }
        ?>
  </div>
  <!--table-responsive-->
</div>
<!--box-content-->