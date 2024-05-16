<?php

require_once("config.php");
//carrega um usuario por id
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//vai carregar uma lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//procura pelo nome
//$search = Usuario::search("eli");
//echo json_encode($search);

//login
$usuario = new Usuario();
$usuario->login("Elisandro", "Karina");
echo $usuario;
?>