<?php
    $valorapolice = 0;

    if($_POST["radioSexo"] == "M" && $_POST["txtIdade"] <= 24)
    {
        $valorapolice = $_POST["txtValor"] * 0.1;
    }
    else
    {
        if($_POST["radioSexo"] == "F")
            $valorapolice = $_POST["txtValor"] * 0.05;
        else
            $valorapolice = $_POST["txtValor"] * 0.02;
    }  
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <div>Código: <?php echo $_POST["txtcodigo"] ?> </div>
        <div>Nome: <?php echo $_POST["txtnome"] ?> </div>
        <div>Idade: <?php echo $_POST["txtIdade"] ?> </div>
        <div>Sexo: <?php echo $_POST["radioSexo"] ?> </div>
        <div>Valor Automóvel: <?php echo $_POST["txtValor"] ?> </div>
        <div>Valor da Apólice: <?php echo $valorapolice ?> </div>
        <div>Qtde Parcelas: <?php echo $_POST["selectParcela"] ?> </div>
        <table border="1" cellspacing ="0" cellpading="0">
        <tr>
            <td>Parcela</td>
            <td>Valor</td>
        </tr>
            <?php
                $contador = 1;
                $valorparcela = $valorapolice / $_POST["selectParcela"];
                while($contador <= $_POST["selectParcela"])
                {
                    echo "<tr><td>" . $contador . "</td><td>" . $valorparcela .
                            "</td></tr>";
                    $contador++;
                }
            ?>
        </table>
    </body>
</html>
