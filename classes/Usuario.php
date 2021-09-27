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
        }

?>