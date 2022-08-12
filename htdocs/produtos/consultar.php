<doctype html>
<html lang="pt-br">
<head>
      <title> Consultar Estoque</TITLE> 
	  <meta charset="utf-8">
</head>
<link href="produtos.css" rel="stylesheet">

<body>
    <nav id="menu">
        <ul>
        <li> <a href="home.php"> Homer </a></li>
        <li>  <a href="cadastrar.php">Cadastrar </a></li>
        <li>  <a href="consultar.php">Consultar </a></li>
        <li>  <a href="excluir.php">Excluir </a></li>
        <li>  <a href="alterar.php">Alterar </a></li>
        <li> <a href="contato.php">Contato </a> </li>
        <ul>
    </nav>
    <center><fieldset> 
    <legend> Inserir dados do produto: </legend>
        <form action="consultar.php" method="POST">
            <table>
            <tr> 
                    <td>Produto:</td>
                    <td> <input type="text" name="produto"> </td> </tr>
                    <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Enviar" name="consultar"/>
                    <input type="reset" value="Limpar"/> </td>
                </tr>       
            </table>
        </form>
        </fieldset>
    </center>
    <?php
if (isset($_POST['consultar'])){

$conexao= mysqli_connect("localhost", "root","","homer");
$flag=false;
$consulta = "select* from produtos where produto = '" .$_POST['produto'] ."'";

$resultado = mysqli_query($conexao,$consulta);


while($registro = mysqli_fetch_array($resultado))

{
echo"<center>Código: " .  $registro['codigo'];
echo"<br>";

echo"<center>Produto: " . $registro['produto'];

echo"<br>";
echo"<center>Marca: " .  $registro['marca'];

echo"<br>";
echo"<center>Preço: " . $registro['preco'];

echo"<br>";
echo"<center>Quantidade: " . $registro['qntde'];

    }
}
?>
</body>
</html>