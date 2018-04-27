<?php

require_once("config.php");


//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao","qwerty");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin('aluno');
//$aluno->setDessenha("@lun0");
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new usuario();
$usuario->loadById(8);
$usuario->update("professor","!@#$%&/()=?*");
echo $usuario;
?>