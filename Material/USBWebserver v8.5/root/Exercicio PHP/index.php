<?php
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input name="n1" />
            <input name="n2" />
            <input name="n3" />
            <input name="n4" />
            <input type="submit" />
        </form>
        <?php
             if($_POST){
                 $_FILES[]
            
                 $x = array(0 => $_POST['n1'],1 => $_POST['n2'],2 => $_POST['n3'],
                                    3 => $_POST['n4']);
                 $i = 0;
                 $maior = $x[0];
                 $menor = $x[0];
                 while($i < count($x) )
                 {
                     //echo $i;
                    if($x[$i] > $maior)
                         $maior = $x[$i];
                     if($x[$i] < $menor)
                         $menor = $x[$i];
                    $i++;
                 }
              echo 'Maior: ' . $maior . '<br/>' . 'Menor: ' . $menor;
             echo 'Maior: ' . max($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4']) . '<br/>';
              echo 'Menor: ' . min($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4']);
             }
        ?>
    </body>
</html>
