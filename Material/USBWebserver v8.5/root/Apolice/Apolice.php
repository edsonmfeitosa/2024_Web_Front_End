<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="comprovante.php" method="post">
            <fieldset>
                <legend>Cadastro de Apólice</legend>
                <div>
                    Código:
                    <input name="txtcodigo" type="text" />
                </div>
                <div>
                    Nome:
                    <input name="txtnome" type="text" />
                </div>
                 <div>
                    Idade:
                    <input name="txtIdade" type="text" />
                </div>
                  <div>
                    Sexo:
                    <input name="radioSexo" type="radio" value="M"/>Masculino
                    <input name="radioSexo" type="radio" value="F"/>Feminino
                </div>
                  <div>
                    Valor Automóvel:
                    <input name="txtValor" type="text" />
                </div>
                <div>
                    Qtde Parcelas:
                    <select name="selectParcela">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Calcular"/>
                    <input type="reset" value="Limpar"/>
                </div>
            </fieldset>
        </form>
    </body>
</html>
