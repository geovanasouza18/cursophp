<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            $n = $_GET ["valor"] ?? "0";
            $antecessor = $n - 1;
            $sucessor = $n + 1;
            echo "<p>O número escolhido foi <strong>$n</strong>";
            echo "<p>O O seu <i>antecessor</i> é $antecessor";
            echo "<p>O O seu <i>sucessor</i> é $sucessor";

        ?>
        <p><a href="javascript:history.go(-1)">&#x2b05;Voltar</a></p>
    </main>
    
</body>
</html>