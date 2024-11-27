<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
         <form action="index.php" method="post">
        Número: <input name="quant" type="text" />
            <input name="btnOk" type="submit" />
        </form>
        <hr/>
    </body>
    <?php
        if($_POST)
        {
            $num1 = $_POST['quant'];
            $total = 1;
             $texto = '';
            while($num1 >= 1)
            {
                $texto = $texto . $num1;               
                $total = $total * $num1;  
                $num1--;
            }
            echo $texto . ' = ' . $total;
        }

        ?>
</html>
