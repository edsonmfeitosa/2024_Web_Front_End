<!DOCTYPE html>

<?php
$resp = 0;

if(isset($_POST['btnSoma'])) //Verifica se EXISTE o Nome do input submit ( se ele foi clicado )
{
	$resp = $_POST['txt1'] + $_POST['txt2'];
}
if(isset($_POST['btnSub'])) //Verifica se EXISTE o Nome do input submit ( se ele foi clicado )
{
$resp = $_POST['txt1'] - $_POST['txt2'];
}
if(isset($_POST['btnDiv'])) //Verifica se EXISTE o Nome do input submit ( se ele foi clicado )
{
$resp = $_POST['txt1'] / $_POST['txt2'];
}
if(isset($_POST['btnMult'])) //Verifica se EXISTE o Nome do input submit ( se ele foi clicado )
{
$resp = $_POST['txt1'] * $_POST['txt2'];
}

?>
<html>
    <head>
        <title>Meu Primeiro Projeto PHP</title>

        <link rel="stylesheet" type="text/css" href="css/padrao.css">

    </head>
    <body>
        <div id="centable" align="center">
            <div id="container" align="left">
                <div id="cabecalho" align="left" style="background-color: #cad1b4">
                    <!-- logo -->
                    <table width="100%">
                        <tr>
                            <td width="80px" height="80px">
                                <img src="img/logo.jpg" width="80px" height="80px" />
                            </td>
                            <td align="center">
                                <h1>Controle de Produtos</h1>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr />

                <div style="display: inline;" width= "500px" id="menu">
                    Menu                 
                </div>
                <div style="display: inline">
				corpo
				<form method="post" action="#">
				 <label for="txUsuario">Usuário</label><br>
					Número 1: <input name="txt1" type="text" value="<?php if($_POST) {echo  $_POST['txt1'];} else {echo 0;} ?>"><br>
					Número 2: <input name="txt2" type="text" value="<?php if($_POST) {echo  $_POST['txt2'];} else {echo 0;} ?>"><br>
					<input value="Somar" type="submit" name="btnSoma" >
					<input value="Subtrair" type="submit" name="btnSub" >
					<input value="Dividir" type="submit" name="btnDiv" >
					<input value="Multiplicar" type="submit" name="btnMult" ><br/>
					Resultado: <input name="txtresultado" type="text" value="<?php echo $resp ?>" />
<?php $text ?>
				</form>
				
				
				
				
				</div>
               
            </div>
			<p align="center" style="color:white"> Teste - Rafael Moreno </p>
        </div>
    </body>
</html>

