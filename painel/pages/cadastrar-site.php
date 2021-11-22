<div class="box-content">
	<h2><i class="fas fa-pencil"></i> Cadastrar Configurações do site</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
		if(isset($_POST['acao'])){
			if(Painel::insert($_POST)){
				Painel::alert('sucesso','O cadastro do genero foi realizado com sucesso!');
			}else{
				Painel::alert('erro','Campos vázios não são permitidos!');
			}
		}
		?>

		<div class="form-group">
			<label>Titulo:</label>
			<input type="text" name="titulo"></input>
		</div><!--form-group-->

  	<div class="form-group">
			<label>Descrição:</label>
			<textarea name="descricao"></textarea>
		</div><!--form-group-->


		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_site.config" />
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->