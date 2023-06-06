<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h1>Exemplos de funções aritméticas</h1> 
    <?php 
        //valor absoluto
        $valor = abs(-9000);
        echo "<p> O valor é: $valor </p>";
        //conversor de base
        $r = base_convert(500, 10, 16);
        echo "<p> O resultado é: $r </p>";
        // valor de pi em const
        $pi = M_PI;
        echo "<p> O valor de PI é: $pi </p>";
        // divisão inteiro
        $div = intdiv(25, 2);
        echo "<p> O resultado é: $div </p>";
        // mostrar o valor mínimo
        $min = min(2,6,9,10);
        echo "<p> O resultado é: $min </p>";
        // mostrar o valor máximo
        $max = max(4,2,6,11,33,12,7,8,9,2);
        echo "<p> O resultado é: $max</p>";
        //calcula a  raíz quadrada
        $raiz = sqrt(81);
        echo "<p> O resultado é: $raiz </p>";
        // calcular raíz a parte de cúbica
        $r = 27 ** (1/3);
        echo "<p> O resultado é: $r </p>";
         
    ?>   

</body>
</html>