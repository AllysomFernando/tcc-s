<?php
verificarPermissaoPagina(1);

?>
<div class="box-content">
  <h2><i class="fas fa-pen"> Adicionar Promoções</i></h2>

  <form method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['acao'])) {

      Painel::alert('sucesso', 'O cadastro das promoções foi feita com sucesso.');
    }




    ?>
    <div class="form-group">
      <label>Imagem da promoção </label>
      <input type="image" name="img"></input>
    </div>
    <!--form-group-->

    <div class="form-group">
      <label>Nome: </label>
      <input type="text" name="nome"></input>
    </div>
    <!--form-group-->

    <div class="form-group">
      <label>Senha: </label>
      <input type="password" name="senha"></input>
    </div>
    <!--form-group-->

  </form>

</div>
<!--box-content-->