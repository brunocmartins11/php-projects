<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = "lightblue">

        <H1 align = "center"> Listando os Clientes </h1>
        
        <center>

        <?php
            $conexao= mysqli_connect("localhost", "root","","cadastro");
            $consulta = "select * from cliente";
            $resultado = mysqli_query($conexao,$consulta);
            while($registro = mysqli_fetch_array($resultado))
            {
                echo"Código: " . $registro['CodigoCliente'];
                echo"<br>";
                echo"Nome: " .  $registro['Nome'];
                echo"<br>";
                echo"Cidade: " . $registro['Cidade'];
                echo"<br>";
                echo"Telefone: " . $registro['Telefone'];
                echo"<p>";
                echo"<hr>";
            }
        ?>

</body>
</html>