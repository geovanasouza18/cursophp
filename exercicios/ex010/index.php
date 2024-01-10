<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Manipulação de strings</h1>
<?php 
    $nome = "Bom dia";

    //tudo maiusculo
    echo strtoupper($nome);

    echo '<br>';
        //Primeira letra de cada palavra maiscula
    echo ucwords($nome);

    echo '<br>';
        //Primeira letra maiscula
    echo ucfirst($nome);

    echo '<br>';
            //tudo minusculo
    echo strtolower($nome);

    $mudar = "Boa tarde";
    echo '<br>';
    //Mudar palavra
    echo str_replace('tarde', 'noite', $mudar);

    echo '<br>';
    //Comecar a imprimir
    echo substr($mudar,3);

    echo '<br>';
    //Número do comprimento do texto, bom para utilizar para CPF, RG. Conta com o espaço vazio
    echo strlen($mudar);



    ?>
</body>
</html>