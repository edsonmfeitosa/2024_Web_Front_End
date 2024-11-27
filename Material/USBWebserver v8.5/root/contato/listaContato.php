<?php
include "conexao.php";
?>

<html>
    <head>        
        <title></title>
    </head>
    <body>
        <table width="95%" border="1" cellspacing="0" cellpadding="0">
            <tr style="background-color: #dfd7d7" align="center">
                <td>Codigo</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>E-mail</td>
            </tr>
            <?php
              $sql = "select * from contato";
              $resultado = mysql_query($sql,$conn);  
              while($dados = mysql_fetch_array($resultado))
              {
                  echo "<tr>";
                  echo "<td>" . $dados["codigo"] . "</td>";
                  echo "<td>" . $dados["nome"] . "</td>";
                  echo "<td>" . $dados["telefone"] . "</td>";
                  echo "<td>" . $dados["email"] . "</td>";
                  echo "</tr>";
              }
              mysql_close();
            ?>
        </table>
        <br/>
        <a href="cadContato.php">Inserir Novo Contato</a>
    </body>
</html>
