<?php

        class Usuario{

            public function atualizarUsuario($nome,$senha,$img){
                $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome = ?, senha = ?, img = ? WHERE user = ?");
                if($sql->execute(array($nome,$senha,$img,$_SESSION['user']))){
                    return true;
                }else{
                    return false;
                }
            }

            public static function userExist($user){
                $sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user = ?");
                $sql->execute(array($user));
                if($sql->rowCount() == 1)
                return true;
                else 
                    return false;
            } 

            public static function cadastrarUsuario($user,$senha,$img,$cargo,$nome){
                $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?,?,?) ");
                $sql->execute($array = array($user,$senha,$img,$cargo,$nome));
            }
        }

       

?>