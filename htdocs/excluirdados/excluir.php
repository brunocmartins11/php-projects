<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>

body

{

background-color:lightblue;

text-align: center;

text-align:40px;

font-size: 20px;

font-family: Arial, 'Times New Roman', Times, serif;

}


</Style>

<body>

<center>

<fieldset>

<form method="POST" action="excluir.php">

DIGITE O CÓDIGO

<input type="text" name="codigo"> <br><br>

<input type="submit" value="Consultar" name="excluir">

<input type="reset" value="Limpar">

</fieldset>

</center>

</form>

<?php

if(isset($_POST['excluir'])){

require "conectar.php";

$flag=false;

$consulta = "select* from cliente where CodigoCliente = " . $_POST['codigo'];

$resultado = mysqli_query($conexao,$consulta);

while($registro = mysqli_fetch_array($resultado))

{

$var_CodigoCliente = $registro['CodigoCliente'] ;

$var_Nome = $registro['nome'] ;

$var_Cidade = $registro['cidade'];

$var_Telefone = $registro['telefone'];

$flag=true;

}

if($flag==false)

{

echo"<center><h1>Registro não encontrado </h1> </center>";

}

else

{

?>

<hr>

<center>

<form action="excluir.php" method="POST">

<table border=1>

<tr>

<!--Dica 1: os elementos <input> desativados em um formulário não serão enviados !-->

<!--Dica 2: os elementos <input> somente leitura em um formulário serão enviados !-->

<td>Código de cadastro</td><td> <input type="text" name="codigo_cliente"

value=<?php echo $var_CodigoCliente; ?> width="200" readonly></td>

<td>Nome</td><td> <input type="text" name="var_nome"

value=<?php echo"'$var_Nome'"; ?> width="200" disabled></td>

<td>Cidade</td><td> <input type="text" name="var_cidade"

value=<?php echo"'$var_Cidade'"; ?> width="200" disabled></td>

<td>Telefone</td><td> <input type="text" name="var_telefone"

value=<?php echo"'$var_Telefone'"; ?> width="200" disabled></td>

</tr>

</table>

<p><input type="submit" value='Excluir' name="confirmar">

</form>

<?php

}

}

if (isset($_POST['confirmar'])){

require "conectar.php";

$var_CodigoCliente=$_POST['codigo_cliente'];

$excluindo = "delete from cliente where CodigoCliente=" . $var_CodigoCliente;

$resultado = mysqli_query($conexao,$excluindo);

if ($resultado == false)

{

echo "Erro na Exclusão do Registro <br>";

}

else{

echo"<script> alert('Registro Excluído');

</script>";

}

}

?>

</body>

</html>