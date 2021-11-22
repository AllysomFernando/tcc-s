<!DOCTYPE html> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthm, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<div class="chamada-escolher">
	<div class="container">
		<h2>Escolha seus produtos e compre agora!</h2>
	</div><!--container-->
</div><!--chamada-->
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<!--<br><br><br><br>
<hr class="hr10">
<body>
  <div class="estoque">
<a href="#"> <img src="<?php /*echo INCLUDE_PATH;*/ ?>imagens/cyberpunk.jpg" class="jog1" ></a>
</div>
<div class="estoque2">
<a href="#"><img src="<?php /*echo INCLUDE_PATH;*/ ?>imagens/revilage.jpg"  class="jog2" ></a>
<br><br><br>
</div>
<div class="botaoc">
<button  class = "botao1"type="button" onclick="alert('Voce será redirecionado para a compra')">Comprar</button>
</div>
<div class="botaor">
<button  class = "botao1"type="button" onclick="alert('Voce será redirecionado para a compra')">Comprar</button>
</div>
</body>-->


<div class="lista-items">
	<div class="container">
		<?php
			$items = \models\homeModel::getLojaItems();
			foreach ($items as $key => $value) {
			$imagem = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque_imagens` WHERE produto_id = $value[id]");
			$imagem->execute();
			$imagem = $imagem->fetch();
		?>
		<div class="produto-single-box">
			<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem['imagem']; ?>" />
			<p>Preço: R$<?php echo Painel::convertMoney($value['preco']) ?></p>
			<a href="<?php echo INCLUDE_PATH ?>?addCart=<?php echo $value['id']; ?>">Adicionar no carrinho!</a>
		</div><!--produto-single-box-->
		<?php } ?>
	</div><!--container-->
</div><!--lista-items-->
