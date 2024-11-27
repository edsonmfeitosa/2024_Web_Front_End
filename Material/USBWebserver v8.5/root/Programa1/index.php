<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="Pagina1.php" method="post">
            <fieldset>
                <legend>Cadastro de Cliente</legend>
                <label for="tnome">Nome:</label>
                <input type="text" name="txtNome" id="tnome" size="50" maxlength="10" placeholder="Digite o nome..." />
                <br />
                <label>Senha:</label>
                <input type="password" name="txtsenha" tabindex="1"/>
                <br />
                <label>Escolha sua cor preferida:</label>
                <input type="radio" name="opcaoCor" value="a" />Azul
                <input type="radio" name="opcaoCor" value="v" checked />Vermelho
                <input type="radio" name="opcaoCor" value="ve" />Verde
                <br />
                <label>Selecione:</label>                
                <select name="comboOpcao">
                    <optgroup label="Grupo 1" disabled>
                        <option>Opção 1</option>
                        <option>Opção 2</option>
                        <option>Opção 3</option>
                    </optgroup>
                    <optgroup label="Grupo 2">
                        <option disabled>Opção 4</option>
                        <option>Opção 5</option>
                        <option>Opção 6</option>
                    </optgroup>
                </select>              

                <input type="button" value="Teste"/>
                <button>Teste</button>
                <br/>

                <input type="reset" value="Limpar"/>
                <br/>
                <input type="submit" value="Enviar"/>

                <input type="file">
                <input type="hidden" value="12" name="campoOculto"/>
            </fieldset>
        </form>
    </body>
</html>
