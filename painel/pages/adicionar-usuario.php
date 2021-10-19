<?php
    verificarPermissaoPagina(2);
    
?>
<div class="box-content">
    <h2><i class="fas fa-pen"> Adicionar Usuário</i></h2>

    <form method="post" enctype="multipart/form-data">
        <?php   
            if(isset($_POST['acao'])){
            //enviei o meu formulario
            $login = $_POST['login'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $img = $_FILES['img'];
            $cargo = $_POST['cargo'];

            if($login == ''){
                Painel::alert('erro','O login está vázio');
            }else if($nome ==''){
                Painel::alert('erro','O nome está vázio');
            }else if($senha == ''){
                Painel::alert('erro','A senha está vázia');
            }else if($img['name'] == ''){
                Painel::alert('erro','Coloque sua imagem');
            }else if($cargo == ''){
                Painel::alert('erro','O cargo precisa estar selecionado');
            }else{
                //podemos cadastrar!
                if($cargo >= $_SESSION['cargo']){
                    Painel::alert('erro','Voce precisa selecionar um cargo menor que o seu');
                }else if(Painel::imagemValida($img) == false){
                    Painel::alert('erro','O formato espeficifado está correto');
                }else if(Usuario::userExist($login)){
                    Painel::alert('erro','O login já existe!');
                }else{
                    //apenas cadastrar no banco de dados
                    $usuario = new Usuario();
                    $imagem = Painel::uploadFile($img);
                    $usuario->cadastrarUsuario($login,$senha,$img,$cargo,$nome);


                    Painel::alert('sucesso','O cadastro do usuário ' .$login . ' foi feito com sucesso');
                }
            }


         
        }
            

        ?>
        <div class="form-group">
            <label>Login: </label>
            <input type="text" name="login" ></input>
        </div><!--form-group-->

        <div class="form-group">
            <label>Nome: </label>
            <input type="text" name="nome" ></input>
        </div><!--form-group-->

        <div class="form-group">
            <label>Senha: </label>
            <input type="password" name="senha" ></input>
        </div><!--form-group-->
        
        <div class="form-group">
            <label>Cargo</label>
            <select name="cargo">
            <?php
                    foreach (Painel::$cargos as $key => $value) {
                        if($key < $_SESSION['cargo'] )  echo '<option value="'.$key.'">'.$value.'</option>';
                    }
             ?>
             </select>
        </div>
        <div class="form-group">
            <label>Imagem </label>
            <input type="file" name="img"></input>
            <input type="hidden" name="img_atual" value="<?php echo $_SESSION['img']; ?>">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Editar"></input>
        </div><!--form-group-->
    </form>


</div><!--box-content-->