<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <div>
            digite um número:
                <input type="text" name="txtvalor" />
                <input type="submit" value="Calcular" />
            </div>
            <div>
                <?php
                    if($_POST)
                    {
                        if($_POST["txtvalor"] != "")
                        {
                            for($x = 0 ; $x<= 10 ; $x++)
                            {
                                echo $x . " x " . $_POST["txtvalor"] . " = " . ($x * $_POST["txtvalor"]) . "<br/>";
                            }
                        }
                    }
                    
                ?>

            </div>
        </form>
    </body>
</html>
