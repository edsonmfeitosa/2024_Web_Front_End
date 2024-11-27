<html>
<head>
<title>Programa PHP 1 </title>
</head>
<body>
<?php
echo "<h1>Olá " . $_POST["txtnome"] . "</h1>" . "<br/>" ."<h2>telefone:".
 $_POST["txttel"] . "<h2/>";
 
/* echo "<h1>Olá " . $_GET["txtnome"] . "</h1>" . "<br/>" ."<h2>telefone:".
 $_GET["txttel"] . "<h2/>";
 */
$cor = "rgb(255,255,255)";
if(isset($_POST['favoritecolor']))
{
	switch ($_POST["favoritecolor"]) {
		case "r":
			$cor = "rgb(255,0,0)";
			break;
		case "g";
			$cor = "rgb(0,255,0)";
			break;
		case "b":
			$cor = "rgb(0,0,255)";
			break;
		}
 }
 
?>

<div width="200px" height="200px" style="background: <?php echo $cor; ?>" >Cor favorita</div>

</body>

</html>