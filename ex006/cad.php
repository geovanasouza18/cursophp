<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET ["nome"] ?? "sem nome";
            $s = $_GET ["sobrenome"] ?? "desconhecido";
            echo "<p> É um prazer te conhecer, $n $s! Este é meu site";
        ?>
        <p><a href="javascript:history.go(-1)">Home</a></p>
    </main>
    
</body>
</html>