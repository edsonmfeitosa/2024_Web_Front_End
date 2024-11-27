<html>
     <body>
        <form action="intervaloNumero.php" method="post">
            Num. 1: <input name="num1" type="text" />
            Num. 2: <input name="num2" type="text" />
            <input name="btnintervalo" type="submit" value="Mostrar" />
            <?php                
                if($_POST)
                {
                    if($_POST['num1'] > $_POST['num2'])
                    {
                        $maior = $_POST['num1'];
                        $menor = $_POST['num2'];
                    }
                    else
                    {
                        $maior = $_POST['num2'];
                        $menor = $_POST['num1'];
                    }                
                    while($menor < $maior-1)
                    {
                        $menor++;
                        echo $menor;                        
                    }
                }
                
            ?>
        </form>
    </body>
</html>
