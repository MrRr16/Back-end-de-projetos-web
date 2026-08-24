<?php
require 'conexao.php';
require 'UsuarioModel.php';

$usuarioModel = new UsuarioModel($conexao);
$usuario = $usuarioModel->buscarPorId(1);
print_r($usuario);