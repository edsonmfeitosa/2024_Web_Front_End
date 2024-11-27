<?php
//variavel usada para conectar-se ao banco
$conn = mysql_connect("localhost", "root", "usbw") or die (mysql_error());
//seleciona o banco de dados que será utilizado
mysql_select_db("vendas",$conn);
//abre conexao
mysql_connect(); 

?>