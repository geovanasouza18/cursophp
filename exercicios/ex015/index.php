<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH PHP</title>
</head>
<body>
    <?php 
        //Função que retorna um valor mínimo ou máximo de uma lista de argumentos
        echo(min(12, 56, 1, 78));
        echo "<br>";
        echo(max(12, 34, 68, 190));
        echo "<br>";
        //Função que retorna a raíz quadrada de um número
        echo(sqrt(81));
        echo "<br>";
        //Função que retorna um valor negativo de um número
        echo(abs(-7.1));
        echo "<br>";
        //Função que arredonda um número de ponto flutuante, para um número inteiro mais próximo
        echo(round(.89));
        echo "<br>";
        //Função que retorna um número aleatório
        echo(rand(1, 10));
        echo "<br>";

        // CONSTANTES
        define("WELCOME", "Bem - vindo ao Brasil");
        echo WELCOME;
        echo "<br>";
        // CONSTANTES ARRAY
        define("car", [
                "Fiat",
                "Montana",
                "Hilux",
                "Corolla",
                "Argo"
        ]);
        echo car[2];
        ?>
</body>
</html>