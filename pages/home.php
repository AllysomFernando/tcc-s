<?php
$infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
$infoSite->execute();
$infoSite = $infoSite->fetch();
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--parte da freewknd-->
<hr class="hr7">
<p class="destaque"><?php echo $infoSite['titulo'];?></p>
<hr class="hr6">
<body>

    <div class="cyberpunkdiv">
       <a href="#"> <img src="<?php echo INCLUDE_PATH; ?>imagens/cyberpunk.jpg" class="cyber" ></a>
  </div>

  </style>
<!-- linha horizontal-->

<hr class="hr5">



<div class="revidiv ">
  <a href="#"><img src="<?php echo INCLUDE_PATH; ?>imagens/revilage.jpg"  class="revi" ></a>
  <div class="linha_vertical"></div>
  <div class="descri">
  <p class="revi_desc">Resident Evil Village </p><br>
  <p class="valorvillage"> <?php echo $infoSite['descricao'];?> </p>
</div>
</div>
</body>
</html>
