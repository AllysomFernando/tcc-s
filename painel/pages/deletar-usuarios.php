<?php
verificarPermissaoPagina(1);

?>
<div class="box-content">
  <h2><i class="fas fa-pen"> Deletar Usuário</i></h2>

  <form method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['acao'])) {

      Painel::alert('sucesso', 'O cadastro do jogo foi feito com sucesso.');
    }



    ?>
    <div class="form-group">
      <label>nome do usuario</label>: </label>
      <input type="text" name="login"></input>
    </div>
    <!--form-group-->
    <div class="form-group">
      <input type="submit" name="acao" value="deletar"></input>
    </div>
    <!--form-group-->
  </form>


</div>
<!--box-content-->