<?php
require 'conexao.php';
require 'UsuarioModel.php';

$usuarioModel = new UsuarioModel($conexao);

$usuario = $usuarioModel->buscarPorId(1);
print_r($usuario);

$usuarioModel->insert("Pedro", "pedro@gmail.com", "abcde");

$usuarioModel->update(1, "Gabriel", "gabriel@gmail.com", "102938");

$usuarioModel->delete(9);


