<html>
<head>
<title>Alteração de Registro</title></head>
<body>
<form method="POST" action="alterar.php">
Digite o código para consultar
<input type="text" name="codigo"> <br><br>
<input type="submit" value="Consultar" name="alterar">
<input type="reset" value="Limpar">
</form>

<?php
if (isset($_POST['alterar'])) {
    require "conecta.php";
    $flag=false;
    if ($_POST['codigo']=="")
    {
        echo "Digite um código";
        return;
    }
    $consulta = "select * from cliente where CodigoCliente= " . $_POST['codigo'];
    $resultado = mysqli_query($conexao,$consulta);
}
while ($registro = mysqli_fetch_array($resultado))
{
    $var_cod =$registro['CodigoCliente'];
    $var_nome = $registro['nome'];
    $var_cidade=$registro['cidade'];
    $flag=true;
}
if ($flag==false)
{
    echo "<center><h1>Registro não encontrado </h1></center>";
}
else{
    ?>