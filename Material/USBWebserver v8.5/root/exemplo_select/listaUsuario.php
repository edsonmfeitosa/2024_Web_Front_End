<?php
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>Usuário</td>
                <td>Senha</td>
            </tr>
            <?php
                $query = "select * from usuario";
                $result = mysql_query($query,$conn);
                while($dados = mysql_fetch_array($result))
                {
                    echo "<tr><td><input type='text' value='" . $dados['usuario'] . "'/></td>";
                    echo "<td><input type='password' value='" . $dados['senha'] . "'/></td></tr>" ;
                }
                mysql_close();
            ?>
        </table>
    </body>
</html>
