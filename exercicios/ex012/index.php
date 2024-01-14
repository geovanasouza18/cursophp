<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo das variáveis</title>
</head>
<body>
    <h1>Variável global e local</h1>
    <?php 
    //Variável global
        $name = "Geovana";
        $sobrenome = "Souza";
        echo "Meu nome é $name";

    //Variável local
        function teste(){
            $sobrenome = "Souza";
            echo "<p>Meu sobrenome é $sobrenome<p>";
        }
        teste();
    //Acessando uma variável global dentro de uma função
        function teste2()  {
            global $name;
        }
        teste2();
        echo "<p>Meu nome é $name<p>";

        //Armazenando uma variável global em um array
        function teste3(){
            $GLOBALS ['name'] =  $GLOBALS ['name'] . $GLOBALS ['sobrenome'];
        }
        teste3();
        echo "<p>Meu nome é $name<p>";
        //Usando o static para salvar uma variável
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
          }
          
          myTest();
          myTest();
          myTest();
    ?>
</body>
</html>