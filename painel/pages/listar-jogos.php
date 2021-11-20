<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar2('tb_admin.estoque',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-jogos');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('tb_admin.estoque',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 4;
	
	$Jogo = Painel::selectAll2('tb_admin.estoque',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Jogos Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Jogos</td>
			<td>Editar</td>
			<td>Excluir</td>

		</tr>

		<?php
			foreach ($Jogo as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-jogos?id=<?php echo $value['id']; ?>"><i class="fas fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-jogos?excluir=<?php echo $value['id']; ?>"><i class="fas fa-times"></i> Excluir</a></td>
	
		</tr>

		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll2('tb_site.estoque')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-jogos?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-jogos?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->


</div><!--box-content-->