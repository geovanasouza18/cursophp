<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados - Números</title>
</head>
<body>
    <?php 
    //Verificar se a variável é do tipo inteira
    $x = 12;
    var_dump(is_int($x)); 

        echo("<br>");

    $y = 12.4;
    var_dump(is_int($y)); 

    echo("<br>");

     //Verificar se a variável é do tipo float
     $a = 34;
     var_dump(is_int($a));

     echo("<br>");

    $b = 45.22;
    var_dump(is_int($b));
    
    echo("<br>");

      //Verificar se a variável é do tipo infinito ou finito
      $f = 12.34564;
      $inf =1.9e411;;

      var_dump($f);

      echo("<br>");

      var_dump($inf);


    ?>
</body>
</html>