<html><head>
<title>Consultar produto</title><style type="text/css"></style></head>
<body>
<form name="Mysql" method="POST" action="consulta.php">
Digite o nome do produto

<input type="text" name="produto"> <br><br>

<input type="submit" value="Consultar" name="consultar">
<input type="reset" value="Limpar">
</form>

<?php
if (isset($_POST['consultar'])){

$conexao = mysqli_connect("sql313.epizy.com", "epiz_27301689", "3e8BJKYNVpHQTO", "epiz_27301689_estoque");
$flag=false;
$consulta = "select* from estoque where Produto = '" .$_POST['produto'] ."'";

$resultado = mysqli_query($conexao,$consulta);

while($registro = mysqli_fetch_array($resultado))

{
echo"Marca : " . $registro['Marca'];

echo"<br>";
echo"Produto : " .  $registro['Produto'];

echo"<br>";
echo"Valor : " . $registro['Valor'];

echo"<br>";
echo"Quantidade : " . $registro['Quantidade'];

echo"<p>";
echo"<hr>";


}
}
?>


</body></html>