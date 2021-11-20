<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar2('genero',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-generos');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('genero',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 4;
	
	$generos = Painel::selectAll3('genero',($paginaAtual - 1) * $porPagina,$porPagina);

	
?>
<div class="box-content">
	<h2><i class="fas fa-id-card-o" aria-hidden="true"></i> Generos Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Generos</td>
	
			<td>#</td>
			<td>#</td>
	
		</tr>

		<?php
			foreach ($generos as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['generos']; ?></td>
		
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-genero?id=<?php echo $value['id']; ?>"><i class="fas fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-generos?excluir=<?php echo $value['id']; ?>"><i class="fas fa-times"></i> Excluir</a></td>

		</tr>

		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll3('genero')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-generos?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-generos?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->


</div><!--box-content-->