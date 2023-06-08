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
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $n = $_GET ["dinheiro"] ?? "0";
            $dolar = 4.92;
            $conversor = $n / $dolar;
            $padrao = numfmt_create("pt_BR", NumberFormatter :: CURRENCY);

            echo "Seus ". numfmt_format_currency($padrao, $n, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversor, "USD");
            echo "<p> <strong> *Cotação fixa de 4,92</strong> informada diretamente no código";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>