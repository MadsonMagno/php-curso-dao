<?php 

require_once ("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//carrega um usuario
/*
$root = new Usuario();
$root->loadById(4);

echo $root;*/

//Carrega uma lista de usuarios
/*$lista  = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuarios, buscando pelo login

/*$search = Usuario::search("jo");

echo json_encode($search);*/


//carrega um usuario autenticado
/*
$usuario = new Usuario();
$usuario->login("jose", "123456789");
echo "$usuario";*/


//INSERT USUARIO NOVO
/*
$aluno = new Usuario("aluno3","@alun03");
/*$aluno->setDeslogin("aluno1");
$aluno->setDessenha("@lun01");

$aluno->insert();

echo $aluno;
*/
/* Alterar usuario
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("professor","234234234");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();

echo $usuario;

 ?>