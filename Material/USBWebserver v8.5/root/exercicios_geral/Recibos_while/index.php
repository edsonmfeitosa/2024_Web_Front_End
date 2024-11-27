<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
        Número de recibos: <input name="quant" type="text" />
            <input name="btnOk" type="submit" />
        </form>
        <hr/>
    </body>
    <?php
        if($_POST)
        {
          
            $quantidade = 1;
            while($quantidade <= $_POST['quant'])
            {
                echo '<table cellspacing=0 cellpadding=0 border=1 width="200px">';
                echo '<tr><td>Recibo: ' . $quantidade . '</td></tr>';
                echo '<tr><td>Nome:</td></tr>';
                echo '<tr><td>Valor:</td></tr>';
                echo '</table><br/><br/>';
                $quantidade++;
            }
            
        }
    ?>
</html>
