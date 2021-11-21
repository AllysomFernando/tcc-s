<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		$selectImagem = MySql::conectar()->prepare("SELECT destaque FROM `tb_site.destaques` WHERE id = ?");
		$selectImagem->execute(array($_GET['excluir']));

		$imagem = $selectImagem->fetch()['destaque'];
		Painel::deleteFile($imagem);
		Painel::deletar2('tb_site.destaques',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-destaques');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('tb_site.destaques',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 4;
	
	$destaques = Painel::selectAll1('tb_site.destaques',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<div class="box-content">
	<h2><i class="fas fa-id-card-o" aria-hidden="true"></i> Destaques Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Nome</td>
			<td>Imagem</td>
			<td>#</td>
			<td>#</td>
			<td>#</td>
			<td>#</td>
		</tr>

		<?php
			foreach ($destaques as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><img style="width: 50px;height:50px;" src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['destaque']; ?>" /></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-slide?id=<?php echo $value['id']; ?>"><i class="fas fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-destaques?excluir=<?php echo $value['id']; ?>"><i class="fas fa-times"></i> Excluir</a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-destaques?order=up&id=<?php echo $value['id'] ?>"><i class="fas fa-angle-up"></i></a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-destaques?order=down&id=<?php echo $value['id'] ?>"><i class="fas fa-angle-down"></i></a></td>
		</tr>

		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll1('tb_site.destaques')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-destaques?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-destaques?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->


</div><!--box-content-->