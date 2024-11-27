<?php
    include "conexao.php";
    
    if($_POST)
    {
        if($_POST["nome"]  == "")
        {
            echo "<script>alert('Campo nome vazio');</script>";
        }
        else
        {
        $sql = "insert into contato(nome,telefone,email) values('"
                . $_POST["nome"] . "','" . $_POST["telefone"] . "','" .
                $_POST["email"] . "')";
        $result = mysql_query($sql,$conn);
         if($result)         
               echo  "<script>alert('Salvo com sucesso');</script>";    
         else
              echo  "<script>alert('Erro ao salvar');</script>"; 
        }       
    }
    
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="cadContato.php" method="post">
            <fieldset>
                <legend>Cadastrar Novo Contato</legend>
                <div>Nome</div>
                <div><input type="text" name="nome" /></div>
                <div>Telefone</div>
                <div><input type="text" name="telefone" /></div>
                <div>E-mail</div>
                <div><input type="text" name="email" /></div>
                <div>
                    <input name="btnSalvar" value="Salvar" type="submit" />
                    <input name="btnLimpar" value="Limpar" type="reset" />
                </div>
            </fieldset>
        </form>
    </body>
</html>
