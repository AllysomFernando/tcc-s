<?php
        $autoLoad = function($class){
                include('classes/'.$class.'.php');
        };
        spl_autoload_register($autoLoad);

        define('INCLUDE_PATH','http://localhost/tcc/tcc-allysu-victor/');
?>