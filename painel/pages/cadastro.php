
    <div class="box-content">
    <h2><i class="fas fa-pen"> Cadastre-se</i></h2>

    <form method="post" enctype="multipart/form-data">

    <?php
        if(isset($_POST['acao'])){
            
        }
    ?>
        <div class="form-group">
            <label>Login: </label>
            <input type="text" name="login" required></input>
        </div><!--form-group-->

        <div class="form-group">
            <label>Nome: </label>
            <input type="text" name="nome" required></input>
        </div><!--form-group-->
        <div class="form-group">
            <label>Senha: </label>
            <input type="password" name="senha" required ></input>
        </div><!--form-group-->

        <div class="form-group">
            <label>Imagem </label>
            <input type="file" name="img"></input>
            <input type="hidden" name="img_atual" value="<?php echo $_SESSION['img']; ?>">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Adicionar"></input>
        </div><!--form-group-->
    </form>


</div><!--box-content-->