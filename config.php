<?php
       session_start();
       date_default_timezone_set('America/Sao_Paulo');
       $autoload = function($class){
                if($class =='Email'){
                        require_once('classes/phpmailer/PHPMailerAutoload.php');
                }
                include('classes/'.$class.'.php');
        };
        spl_autoload_register($autoload);
   
        define('INCLUDE_PATH','http://localhost/tcc/tcc-allysu-victor/');
        define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
        
        define('BASE_DIR_PAINEL',__DIR__.'/painel');

        //conectar com o banco de dados;
     	define('HOST','localhost');
        define('DATABASE','tcc');
	define('USER','root');
	define('PASSWORD','');

      

        //funções

        function pegaCargo($cargo){
                $arr = [
                 '0' => 'Normal',
                 '1' => 'Mod',
                 '2' => 'Adm'
                ];
                return $arr[$cargo];
        }
        //Constantes para o painel de controle
	define('NOME_EMPRESA','Ruddy Store');
?>