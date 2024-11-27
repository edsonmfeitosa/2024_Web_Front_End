

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nota 1</td>
                    <td><input type="text" name="n1" /></td>

                    <td>Nota 2</td>
                    <td><input type="text" name="n2" /></td>
                </tr>
                <tr>
                    <td>Nota 3</td>
                    <td><input type="text" name="n3" /></td>

                    <td>Nota 4</td>
                    <td><input type="text" name="n4" id="n4" /></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input name="btnCalc" type="submit" value="Calcular" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if($_POST)
            {
                if(($_POST['n1']+$_POST['n2']+$_POST['n3']+$_POST['n4'])/4 >= 6)
                    echo "Aprovado";
                    else
                    echo "Reprovado";
            }
        ?>
    </body>
</html>
