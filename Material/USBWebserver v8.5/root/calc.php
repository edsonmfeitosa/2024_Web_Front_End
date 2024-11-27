
<?php
     $_resultado = 0;    
     if($_GET)
     {
    if(isset($_GET['soma']))
    {
        $_resultado = $_GET['tnum1'] + $_GET['tnum2'];
    }
     if(isset($_GET['sub']))
    {
        $_resultado = $_GET['tnum1'] - $_GET['tnum2'];
    }
      if(isset($_GET['mult']))
    {
        $_resultado = $_GET['tnum1'] * $_GET['tnum2'];
    }
      if(isset($_GET['div']))
    {
        $_resultado = $_GET['tnum1'] / $_GET['tnum2'];
    }
     }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form action="calc.php" method="get">
        Num. 1: <input name="tnum1" type="text" />
            Num. 2: <input name="tnum2" type="text" />
            <input name="soma" type="submit" value="+" />
            <input name="sub" type="submit" value="-" />
            <input name="mult" type="submit" value="*" />
            <input name="div" type="submit" value="/" />
            Resultado: <input name="tresultado" type="text" value="<?php echo $_resultado ?>" />
        </form>
    </body>
</html>
