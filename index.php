<?php 

require_once("config.php");
/*Carrega um Usuário
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

//Carrega uma lsita de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("root");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("bruce", "bruce");
//echo $usuario;


//Cadastrar Usurio
//$aluno = new Usuario("Aluno", "@lun0");
//$aluno->insert();
//echo $aluno;


//Alterar informações do usuario
/*
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("Gui Pires", "44444");
echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();

echo $usuario;
?>