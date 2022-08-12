<html>
<head>
<title> Excluir Registro </title> 
</head>
<body>
<form method="POST" action="excluir.php">
Digite o Código
<input type="text" name="codigo"> <br> <br>
<input type="submit" value="Consultar" name="excluir">
<input type="reset" value="Limpar">
</form>
<?php
if (isset($_POST['excluir'])) {
    require "conecta.php";
    $flag=false;
    $consulta = "select * from cliente where codigo= " . $_POST['codigo'];
    $resultado = mysqli_query($conexao, $consulta);
    while ($registro = mysqli_fetch_array($resultado))
    {
        $var_cod = $registro['CodigoCliente'];
        $var_nome = $registro['nome'];
        $var_cidade = $registro['cidade'];
        $flag=true;
    }
    if ($flag==false)
    {
        echo "<center> <h1> Registro não Encontrado </h1> </center>";
    }
    else
    {
        ?>
        <hr> <center>
        <form action="excluir.php" method="POST">
        <table>
        <tr>
        <!-- Dica 1: Os elementos <input> desativados em um formulário não serão enviados !-->
        <!-- Dica 2: Os elementos <input> somente leitura em um formulário serão envidados !-->
        <td>Código de cadastro</td><td><input type="text" name="codigo_cliente" value=<?php echo $var_cod; ?> widht="200" reandoly></td>
        <td>Nome</td><td><input type=text name="var_cidade" value=<?php echo "$var_cidade"; ?> widht="200" disabled></td></tr>
        </table>
        <p><input type="submit" value='Excluir' name="confirmar">
        </form>
        <?php
    }
}
if (isset($_POST['confirmar'])){
    require "conecta.php";
    $cod=$_POST['codigo_cliente'];
    $excluindo ="delete from cliente where codigo=" . $cod;
    $resultado = mysqli_query($conexao, $excluindo);
    if ($resultado==false)
    {
        echo "Erro na Exclusão do Registro <br>";
    }
    else {
        echo "<script> alert('Registro Exluido');
        </script>";
    }
}
?>
</body></html>