<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$generos = Painel::select('genero','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
 ?>
<div class="box-content">
	<h2><i class="fas fa-pencil"></i> Editar Genero</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('sucesso','O genero foi editado com sucesso!');
					$generos = Painel::select('genero','id = ?',array($id));
   
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Genero:</label>
			<input type ="text" name="generos" > <?php echo $generos['generos']; ?></input>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="nome_tabela" value="genero" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->