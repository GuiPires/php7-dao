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
$usuario = new Usuario();
$usuario->login("bruce", "bruce");
echo $usuario;

?>