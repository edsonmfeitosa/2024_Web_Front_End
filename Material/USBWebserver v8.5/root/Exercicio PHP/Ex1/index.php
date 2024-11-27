<html>
<head>
<title>Programa PHP 1 </title>
</head>
<body>
<form action="pagina1.php" method="post">
	<p>Nome:</p>
	<input type="text" name="txtnome"/>
	<p>Telefone:<p>
	<input type="text" name="txttel"/><br/>	
	
	<p>Qual é a sua cor favorita:
	<input type="radio" name="favoritecolor" value="r" /> Vermelha 
	<input type="radio" name="favoritecolor" value="g" /> Verde 
	<input type="radio" name="favoritecolor" value="b" /> Azul </p>

	
	<input type="submit" name="btnEnviar" value="Enviar"/>
</form>
</body>
</html>