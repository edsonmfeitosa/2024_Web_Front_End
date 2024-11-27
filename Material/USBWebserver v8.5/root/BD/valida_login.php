<?php
if($_POST)
{
//inclui dados da conexao
include "conexao.php";

$query = "select * from usuario where usuario = '" . $_POST['txtUsuario'] . "' and senha = '" . $_POST['txtSenha'] . "'";

//executa consulta
$resultado = mysql_query($query,$conn);

//verifica quantidade de linhas
$linhas = mysql_num_rows($resultado);

//fecha conexao
mysql_close(); 

if($linhas > 0)
{//encontrou o usuario e senha
	session_start();
	$_SESSION["usuario"] = $_POST['txtUsuario'];
	header ("Location: index.php");
}
else
{//não encontrou nada
	echo "<script>alert('Usuário/Senha não encontrado');history.back();</script>";
}

}
?>