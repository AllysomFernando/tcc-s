<?php

class Painel
{
    public static $cargos = [
        '0' => 'Usuário',
        '1' => 'Moderador',
        '2' => 'Administrador'
    ];

    public static function logado()
    {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function loggout()
    {
        setcookie('lembrar', 'true', time() - 1, '/');
        session_destroy();
        header('Location: ' . INCLUDE_PATH_PAINEL);
    }
    public static function loadPage()
    {
        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
            if (file_exists('pages/' . $url[0] . '.php')) {
                include('pages/' . $url[0] . '.php');
            } else {
                //eh pra quando a pagina não existe
                header('Location: ' . INCLUDE_PATH_PAINEL);
            }
        } else {
            include('pages/home.php');
        }
    }
    public static function listarUsuariosOnline()
    {
        self::limparUsuariosOnline();
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
        $sql->execute();
        return $sql->fetchAll();
    }
    public static function limparUsuariosOnline()
    {
        $date = date('Y-m-d H:i:s');
        $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
    }
    public static function alert($tipo, $mensagem)
    {
        if ($tipo == 'sucesso') {
            echo '<div class="box-alert sucesso"><i class="fas fa-check"></i> ' . $mensagem . '</div>';
        } elseif ($tipo == 'erro') {
            echo '<div class="box-alert erro"><i class="fas fa-times"></i> ' . $mensagem . '</div>';
        }
    }
    public static function imagemValida($img)
    {
        if (
            $img['type'] == 'image/jpeg' ||
            $img['type'] == 'image/jpg' ||
            $img['type'] == 'image/png'
        ) {

            $tamanho = intval($img['size'] / 1024);
            if ($tamanho < 500)
                return true;
            else
                return false;
            return true;
        } else {
            return false;
        }
    }
    public static function uploadFile($img)
    {
        $formatoArquivo = explode('.', $img['name']);
        $imagemNome = uniqid() . '.' . $formatoArquivo[count($formatoArquivo) - 1];
        if (move_uploaded_file($img['tmp_name'], BASE_DIR_PAINEL . '/uploads/' . $imagemNome))
            return $imagemNome;
        else
            return false;
    }
    public static function deleteFile($file)
    {
        @unlink('uploads/' . $file);
    }
    public static function formatarMoedaBd($valor){
        $valor = str_replace('.', '', $valor);
        $valor = str_replace(',', '.', $valor);
        return $valor;
    }
    
		public static function insert($arr){
			$certo = true;
			$nome_tabela = $arr['nome_tabela'];
			$query = "INSERT INTO `$nome_tabela` VALUES (null";
			foreach ($arr as $key => $value) {
				$nome = $key;
				$valor = $value;
				if($nome == 'acao' || $nome == 'nome_tabela')
					continue;   
				if($value == ''){
					$certo = false;
					break;
				}
				$query.=",?";
				$parametros[] = $value;
			}

			$query.=")";
			if($certo == true){
				$sql = MySql::conectar()->prepare($query);
				$sql->execute($parametros);
				$lastId = MySql::conectar()->lastInsertId();
				$sql = MySql::conectar()->prepare("UPDATE `$nome_tabela` SET order_id = ? WHERE id = $lastId");
				$sql->execute(array($lastId));
			}
			return $certo;
		}
        public static function select($table,$query = '',$arr = ''){
			if($query != false){
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");
				$sql->execute($arr);
			}else{
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table`");
				$sql->execute();
			}
			return $sql->fetch();
		}

		/*
			Metodo especifico para selecionar multiplos registros com base na query.
		*/

		public static function selectQuery($table,$query = '',$arr = ''){
			if($query != false){
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");
				$sql->execute($arr);
			}else{
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table`");
				$sql->execute();
			}
			return $sql->fetchAll();
		}

		public static function orderItem($tabela,$orderType,$idItem){
			if($orderType == 'up'){
				$infoItemAtual = Painel::select($tabela,'id=?',array($idItem));
				$order_id = $infoItemAtual['order_id'];
				$itemBefore = MySql::conectar()->prepare("SELECT * FROM `$tabela` WHERE order_id < $order_id ORDER BY order_id DESC LIMIT 1");
				$itemBefore->execute();
				if($itemBefore->rowCount() == 0)
					return;
				$itemBefore = $itemBefore->fetch();
				Painel::update(array('nome_tabela'=>$tabela,'id'=>$itemBefore['id'],'order_id'=>$infoItemAtual['order_id']));
				Painel::update(array('nome_tabela'=>$tabela,'id'=>$infoItemAtual['id'],'order_id'=>$itemBefore['order_id']));
			}else if($orderType == 'down'){
				$infoItemAtual = Painel::select($tabela,'id=?',array($idItem));
				$order_id = $infoItemAtual['order_id'];
				$itemBefore = MySql::conectar()->prepare("SELECT * FROM `$tabela` WHERE order_id > $order_id ORDER BY order_id ASC LIMIT 1");
				$itemBefore->execute();
				if($itemBefore->rowCount() == 0)
					return;
				$itemBefore = $itemBefore->fetch();
				Painel::update(array('nome_tabela'=>$tabela,'id'=>$itemBefore['id'],'order_id'=>$infoItemAtual['order_id']));
				Painel::update(array('nome_tabela'=>$tabela,'id'=>$infoItemAtual['id'],'order_id'=>$itemBefore['order_id']));
			}
		}
        
		public static function deletar($tabela,$id=false){
			if($id == false){
				$sql = MySql::conectar()->prepare("DELETE FROM `$tabela`");
			}else{
				$sql = MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE cpf = $id");
			}
			$sql->execute();
		}

}
