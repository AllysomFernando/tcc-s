<?php
        $autoLoad = function($class){
                if($class =='Email'){
                        include('classes/phpmailer/PHPMailerAutoLoad.php');
                }
                include('classes/'.$class.'.php');
        };
        spl_autoload_register($autoLoad);

        define('INCLUDE_PATH','http://localhost/tcc/tcc-allysu-victor/');
?>