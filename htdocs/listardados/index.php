<html>
<head> 
<title> Conexão com MySql</title>
</head>
<bodybgcolor="lightblue">
<h1 align="center"> Listando os Clientes</h1>
<center>
<?php
$conexao= mysqli_connect("localhost", "root","","cadastro");
$consulta = "select* fromcliente";
$resultado = mysqli_query($conexao,$consulta);
while($registro = mysqli_fetch_array($resultado))
{  
echo"Código: " . $registro['CodigoCliente'];
echo"<br>";
echo"Nome: " .  $registro['Nome'];
echo"<br>";
echo "Cidade: " . $registro['Cidade'];
echo"<br>";
echo"Telefone: " . $registro['Telefone'];
echo"<p>";
echo"<hr>";
}
?>
</body>
</html>