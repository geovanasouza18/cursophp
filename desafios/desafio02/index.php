<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p> 
        <?php 
            echo "O valor gerado foi " . rand(0, 100);
        ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>    
</section>  
   
</body>
</html>
