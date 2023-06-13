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
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php 
        $num = $_POST["n"] ?? 0;
        $int = (int) $num;
        $fra = $num - $int; 

        echo "<p> Analisando o número <strong>".number_format($num, 3, "," , ".")."</strong> infomado pelo usuário:</p>";
        echo "<ul><li> A parte inteira do número é <strong>".  number_format($int, 0, ",", ".")."</strong></li>";
        echo "<li> A parte fracionária do número é <strong>". number_format($fra, 3, ",", ".")."</strong></li></ul>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>