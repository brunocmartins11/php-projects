<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = "lightblue">
<form method="POST" action="Consultar.php">
Digite o nome do produto
<input type="text" name="codigo"> <br><br>
<input type="submit" value="Consultar" name="consultar">
<input type="reset" value="Limpar">
</form>

<?php
if (isset($_POST['consultar'])){

$conexao= mysqli_connect("localhost", "root","","produtos");
$flag=false;
$consulta = "select* from estoque where produto = '" .$_POST['codigo'] ."'";

$resultado = mysqli_query($conexao,$consulta);

while($registro = mysqli_fetch_array($resultado))

{
echo"Código : " .  $registro['codigo'];
echo"<br>";

echo"Produto : " . $registro['produto'];

echo"<br>";
echo"Marca : " .  $registro['marca'];

echo"<br>";
echo"Valor : " . $registro['valor'];

echo"<br>";
echo"Quantidade : " . $registro['quantidade'];

echo"<p>";
echo"<hr>";


}
}
?>

</body>
</html>