<?php
verificarPermissaoPagina(1);

?>
<div class="box-content">
  <h2><i class="fas fa-pen"> Adicionar Usuário</i></h2>

  <form method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['acao'])) {

      Painel::alert('sucesso', 'O cadastro do jogo foi feito com sucesso.');
    }



    ?>
    <div class="form-group">
      <label>Nome dos jogos: </label>
      <input type="text" name="login"></input>
    </div>
    <!--form-group-->

    <div class="form-group">
      <label>descrição: </label>
      <input type="text" name="nome"></input>
    </div>
    <!--form-group-->
    <div class="form-group">
      <label>valor do jogo: </label>
      <input type="text" name="nome"></input>
    </div>
    <!--form-group-->


    <div class="form-group">
      <label>Imagem </label>
      <input type="file" name="img"></input>
      <input type="hidden" name="img_atual" value="<?php echo $_SESSION['img']; ?>">
    </div>
    <!--form-group-->
    <div class="form-group">
      <input type="submit" name="acao" value="Adicionar"></input>
    </div>
    <!--form-group-->
  </form>


</div>
<!--box-content-->