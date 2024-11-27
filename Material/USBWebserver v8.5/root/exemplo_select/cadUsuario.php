<?php
    if($_POST)
    {
        include "conexao.php";
         $query = "insert into usuario values('". $_POST["usu"] .
         "','". $_POST["usu"] ."')";
         $result = mysql_query($query,$conn);
         if($result)
         {
           echo  "<script>alert('Salvo com sucesso');</script>";
         }
         else
          echo  "<script>alert('Erro ao salvar');</script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form method="post" action="cadUsuario.php">
            <div>Usuário</div>
            <div><input type="text" name="usu" /></div>
            <div><input type="password" name="senha" /></div>
            <div>
                <input type="submit" name="salvar" value="Salvar" />
                <input type="reset" name="salvar" value="Limpar" />
            </div>
        </form>
    </body>
</html>
