<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>

    <h1>Manipulação de Strings</h1>
    <?php 
        $nome = "Geovana";
        $nom = "Rodrigo";
        $snom = "Nogueira";
            echo "Olá $nome";
            echo 'Olá $nome';
            const CANAL = "Curso em vídeo \u{1F499}";
            echo "Eu adoro o " . CANAL;
            echo "Estamos no ano de " . date('Y');
        echo "$nom \" Minotauro\" $snom";
        //sintaxe heredoc
        $curso = "PHP";
        $ano = date('Y');
        echo <<< TEXTO
            Olá galera do curso $curso!
            Como está sendo em ano de $ano?
        TEXTO;
        echo <<< 'FRASE'
        Estou estudando com o melhor professor no $curso em $ano
        FRASE;
    ?>
</body>
</html>