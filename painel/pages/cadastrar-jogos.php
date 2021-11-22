<div class="box-content">

	<h2><i class="fa fa-pencil"></i> Cadastrar Jogos</h2>


	<form method="post" enctype="multipart/form-data">
		<?php
		if(isset($_POST['acao'])){

			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$quantidade = $_POST['quantidade'];
			$preco = Painel::formatarMoedaBd($_POST['preco']);

			$imagens = array();
			$amountFiles = count($_FILES['imagem']['name']);

			$sucesso = true;

			if($_FILES['imagem']['name'][0] != ''){

			for($i =0; $i < $amountFiles; $i++){
				$imagemAtual = ['type'=>$_FILES['imagem']['type'][$i],
				'size'=>$_FILES['imagem']['size'][$i]];
				if(Painel::imagemValida($imagemAtual) == false){
					$sucesso = false;
					Painel::alert('erro','Uma das imagens selecionadas são inválidas!');
					break;
				}
			}

			}else{
				$sucesso = false;
				Painel::alert('erro','Você precisa selecionar pelo menos uma imagem!');
			}


			if($sucesso){
				//TODO: Cadastrar informacoes e imagens e realizar upload.
				for($i =0; $i < $amountFiles; $i++){
					$imagemAtual = ['tmp_name'=>$_FILES['imagem']['tmp_name'][$i],
						'name'=>$_FILES['imagem']['name'][$i]];
					$imagens[] = Painel::uploadFile($imagemAtual);
				}

				$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.estoque` VALUES (null,?,?,?,?)");
				$sql->execute(array($nome,$descricao,$quantidade,$preco));
				$lastId = MySql::conectar()->lastInsertId();
				foreach ($imagens as $key => $value) {
					MySql::conectar()->exec("INSERT INTO `tb_admin.estoque_imagens` VALUES (null,$lastId,'$value')");
				}
				Painel::alert('sucesso','O jogo foi cadastrado com sucesso!');
			}

			
		}
		?>
		<div class="form-group">
			<label>Nome do jogo:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do jogo:</label>
			<textarea name="descricao"></textarea>
		</div><!--form-group-->
		
		<div class="form-group">
			<label>Quantidade atual do jogoo:</label>
			<input type="number" name="quantidade" min="0" max="900" step="5" value="0">
		</div><!--form-group-->

		<div class="form-group">
			<label>Preço:</label>
			<input type="text" name="preco" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Selecione as imagens:</label>
			<input multiple type="file" name="imagem[]">
		</div><!--form-group-->
		<input type="submit" name="acao" value="Cadastrar Produto!">
	</form>

</div><!--box-content-->