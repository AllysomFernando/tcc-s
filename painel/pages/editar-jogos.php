<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$jogo = Painel::select('tb_admin.estoque','id = ?',array($id));
    $descricao = Painel::select('tb_admin.estoque','id = ?',array($id));
    $quantidade = Painel::select('tb_admin.estoque','id = ?',array($id));
    $preco  = Painel::select('tb_admin.estoque','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
 ?>
<div class="box-content">
	<h2><i class="fas fa-pencil"></i> Editar Jogo</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('sucesso','O jogo foi editado com sucesso!');
					$jogo = Painel::select('tb_admin.estoque','id = ?',array($id));
          $descricao = Painel::select('tb_admin.estoque','id = ?',array($id));
          $quantidade = Painel::select('tb_admin.estoque','id = ?',array($id));
          $preco = Painel::select('tb_admin.estoque','id = ?',array($id));
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Nome do Jogo:</label>
			<input type ="text" name="nome" > <?php echo $jogo['nome']; ?></input>
		</div><!--form-group-->

    <div class="form-group">
			<label>Descrição do jogo:</label>
			<textarea name="descricao"><?php echo $descricao['descricao'];?></textarea>
		</div><!--form-group-->

    <div class="form-group">
			<label>Quantidade atual do jogos:</label>
			<input type="number" name="quantidade" min="0" max="900" step="5" value="0"><?php echo $quantidade['quantidade']; ?></input>
		</div><!--form-group-->

    <div class="form-group">
			<label>Preço: </label>
			<input type ="text" name="preco"><?php echo $preco['preco']; ?></input>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="nome_tabela" value="tb_admin.estoque" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->