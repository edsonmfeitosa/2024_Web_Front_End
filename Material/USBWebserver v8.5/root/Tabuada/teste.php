<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="teste.php" method="post">
            <div>
                 <input type="text" name="txtvalor" />
            <?php
               if($_POST)
               {
                   if($_POST["txtvalor"] != "")
                        echo "<div>123</div>";   
               }
                
            ?>
                </div>
            <input type="submit" value="ok"/>
        </form>
    </body>
</html>
