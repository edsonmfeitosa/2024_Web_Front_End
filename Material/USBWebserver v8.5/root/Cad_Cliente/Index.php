<html>
    <head>
        <title>Cadastro de Cliente</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post" action="Comprovante.php">
            <fieldset>
                <legend>Cadastro de Cliente</legend>
                <div>Código</div>
                <div>
                    <input type="text" name="tCodigo" />
                </div>
                <div>Nome</div>
                <div><input type="text" name="tNome"/></div>
                <div>Sexo</div>
                <div>
                    <input type="radio" name="rsexo" value="M"/>Masculino
                    <input type="radio" name="rsexo" value="F"/>Feminino
                </div>
                <div>Estado Civil</div>
                <div>
                    <select name="sEstadoCivil">
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>Viúvo</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Enviar"/>
                    <input type="reset" value="Limpar" />
                </div>
            </fieldset>
        </form>
    </body>
</html>
