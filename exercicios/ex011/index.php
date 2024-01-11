    <?php 
        $cidades[] = 'São Luís';
        $cidades[] = 'São Paulo';
        $cidades[] = 'Minas Gerais';

        //var_dump($cidades);

        $cliente['Nome'] = 'Ana';
        $cliente['Genero'] = 'Feminino';
        $cliente['Telefone'] = '989778765';
        $cliente['Email'] = 'ana@gmail.com';
        $clientes [] = $cliente;

        $cliente['Nome'] = 'Rebeca';
        $cliente['Genero'] = 'Feminino';
        $cliente['Telefone'] = '98776655';
        $cliente['Email'] = 'rebeca@gmail.com';
        $clientes [] = $cliente;

        $cliente['Nome'] = 'Claudio';
        $cliente['Genero'] = 'Masculino';
        $cliente['Telefone'] = '12334456';
        $cliente['Email'] = 'claudio@gmail.com';
        $clientes [] = $cliente;

        $cliente['Nome'] = 'Eduardo';
        $cliente['Genero'] = 'Masculino';
        $cliente['Telefone'] = '4563728';
        $cliente['Email'] = 'eduardo@gmail.com';
        $clientes [] = $cliente;

        //var_dump($clientes);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arrays</title>
</head>
<body>
    <h2> Clientes</h2>
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Genero</td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $clientes[0] ['Nome'];?> </td>
            <td><?php echo $clientes[0] ['Email'];?> </td>
            <td><?php echo $clientes[0] ['Telefone'];?> </td>
            <td><?php echo $clientes[0] ['Genero'];?> </td>
        </tr>
        <tr>
            <td><?php echo $clientes[1] ['Nome'];?> </td>
            <td><?php echo $clientes[1] ['Email'];?> </td>
            <td><?php echo $clientes[1] ['Telefone'];?> </td>
            <td><?php echo $clientes[1] ['Genero'];?> </td>
        </tr>
        <tr>
            <td><?php echo $clientes[2] ['Nome'];?> </td>
            <td><?php echo $clientes[2] ['Email'];?> </td>
            <td><?php echo $clientes[2] ['Telefone'];?> </td>
            <td><?php echo $clientes[2] ['Genero'];?> </td>
        </tr>
        <tr>
            <td><?php echo $clientes[3] ['Nome'];?> </td>
            <td><?php echo $clientes[3] ['Email'];?> </td>
            <td><?php echo $clientes[3] ['Telefone'];?> </td>
            <td><?php echo $clientes[3] ['Genero'];?> </td>
        </tr>
        </tbody>

    </table>
</body>
</html>