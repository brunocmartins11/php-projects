<html>
<head> <title> Conexão com MySql </title> </head>
<body bgcolor="lightblue">
<h1 align="center">Listando os Clientes </h1>
<center>
<?php
$conexao = mysqli_connect("localhost", "root", "", "cadastro");
$consulta = "select * from cliente";
$resultado = mysqli_query($conexao,$consulta);
while ($registro = mysqli_fetch_array($resultado))
{
    echo "Código:" . $registro['CodigoCliente'];
    echo "<br>";
    echo "Nome:" . $registro['nome'];
    echo "<br>";
    echo "Cidade:" . $registro['cidade'];
    echo "<br>";
    echo "Telefone:" . $registro['telefone'];
    echo "<p>";
    echo "<hr>";
}
?>
</body>
</html>