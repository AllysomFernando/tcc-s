<?php

class Usuario
{

    public function atualizarUsuario($nome, $senha, $img)
    {
        $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome = ?, senha = ?, img = ? WHERE user = ?");
        if ($sql->execute(array($nome, $senha, $img, $_SESSION['user']))) {
            return true;
        } else {
            return false;
        }
    }
    public function atualizarUsuarios($cpf, $nome, $senha)
    {
        $sql = MySql::conectar()->prepare("UPDATE `cliente` SET cpf = ?, nome_cliente = ?, senha = ? WHERE cpf = ?");
        if ($sql->execute(array($cpf, $nome, $senha,  $_SESSION['cpf']))) {
            return true;
        } else {
            return false;
        }
    }

    public static function userExist($user)
    {
        $sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user = ?");
        $sql->execute(array($user));
        if ($sql->rowCount() == 1)
            return true;
        else
            return false;
    }
    public static function cadastrarUsuario($user, $senha, $img, $nome, $cargo)
    {
        $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?,?,?)");
        $sql->execute(array($user, $senha, $img, $nome, $cargo));
    }
    public static function cadastrarUsuarios($cpf, $nome, $senha)
    {
        $sql = MySql::conectar()->prepare("INSERT INTO cliente VALUES (?,?,?)");
        $sql->execute(array($cpf, $nome, $senha));
    }
}