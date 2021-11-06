<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function ($class) {
        if ($class == 'Email') {
                require_once('classes/phpmailer/PHPMailerAutoload.php');
        }
        include('classes/' . $class . '.php');
};
spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/tcc/tcc-allysu-victor/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');

define('BASE_DIR_PAINEL', __DIR__ . '/painel');

//conectar com o banco de dados;
define('HOST', 'localhost');
define('DATABASE', 'tcc');
define('USER', 'root');
define('PASSWORD', '');

//funções do painel

function pegaCargo($indice)
{
        return Painel::$cargos[$indice];
}

function selecionadoMenu($par)
{
        $url = explode('/', @$_GET['url'])[0];
        if ($url == $par) {
                echo 'class="menu-active"';
        }
}
//Constantes para o painel de controle
define('NOME_EMPRESA', 'Ruddy Store');

function verificaPermissaoMenu($permissao)
{
        if ($_SESSION['cargo'] >= $permissao) {
                return;
        } else {
                echo 'style="display:none; "';
        }
}

function verificarPermissaoPagina($permissao)
{
        if ($_SESSION['cargo'] <= $permissao) {
                return;
        } else {
                echo 'style="display:none; "';
        }
}