
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Clientes Cadastrados</h2>
	<div class="busca">
		<h4><i class="fa fa-search"></i> Realizar uma busca</h4>
		<form method="post">
			<input placeholder="Procure por: nome ou cpf " type="text" name="busca">
			<input type="submit" name="acao" value="Buscar!">
		</form>
	</div><!--busca-->
	<div class="boxes">
	<?php
		$query = "";
		if(isset($_POST['acao'])){
			$busca = $_POST['busca'];
			$query = " WHERE nome_cliente LIKE '%$busca%' OR cpf LIKE '%$busca%'";
		}
		$clientes = MySql::conectar()->prepare("SELECT * FROM `cliente` $query");
		$clientes->execute();
		$clientes = $clientes->fetchAll();
		if(isset($_POST['acao'])){
			echo '<div style="width:100%;" class="busca-result"><p>Foram encontrados <b>'.count($clientes).'</b> resultado(s)</p></div>';
		}
		foreach($clientes as $value){
	?>
		<div class="box-single-wraper">
			<div class="box-single">
				<div class="topo-box">
					<h2><i class="fas fa-user"></i></h2>
				</div><!--topo-box-->
				<div class="body-box">
					<p><b><i class="fas fa-pencil"></i> Nome do cliente:</b> <?php echo $value['nome_cliente']; ?></p>
					<p><b><i class="fas fa-pencil"></i> cpf:</b> <?php echo $value['cpf']; ?></p>
			
					<div class="group-btn">
						<a class="btn delete" item_id="<?php echo $value['cpf']; ?>" href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-times"></i> Excluir</a>
						<a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-cliente?id=<?php echo $value['cpf']; ?>"><i class="fas fa-pencil"></i> Editar</a>
					</div><!--group-btn-->
				</div><!--body-box-->
			</div><!--box-single-->
		</div><!--box-single-wraper-->

		<?php } ?>

		<div class="clear"></div>

	</div><!--boxes-->

</div><!--box-content-->