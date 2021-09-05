<?php
       $autoload = function($class){
                if($class =='Email.php'){
                        require_once('classes/phpmailer/PHPMailerAutoload.php');
                }
                include('classes/'.$class.'.php');
        };
                spl_autoload_register($autoload);
   
        define('INCLUDE_PATH','http://localhost/tcc/tcc-allysu-victor/');
?>