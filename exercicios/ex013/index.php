<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
<pre>
    <?php 
  
    $x = -87;
    var_dump($x);
    $y = "Hello";
    $y = NULL;
    var_dump($y);
    // Array
        $car = array ("volvo", "Toyota", "BMW");
        var_dump($car);

        //Conversão
        $teste = "Hello";
        $teste = (bool) $teste;
        var_dump($teste);

        //Aspas simples retornam a string como foi escrita, com o nome da variável:

        $nome = "John";
        echo 'Hello $x';
        echo ("<br>");
        echo strlen("Hello world");
        echo ("<br>");
        echo str_word_count("Hello world!");


    ?>  
    </pre> 
</body>
</html>
