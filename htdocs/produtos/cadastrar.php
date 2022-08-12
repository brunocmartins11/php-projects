<doctype html>
<html lang="pt-br">
<head>
      <title> Cadastrar Estoque  </TITLE> 
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
        <form action="cadastrar.php" method="POST">
            <table>
                    <td>Marca:</td>
                    <td> <input type="text" name="marca"> </td> </tr>
                <tr> 
                    <td>Produto:</td>
                    <td> <input type="text" name="produto"> </td> </tr>
                <tr> 
                    <td>Valor:</td>
                    <td> <input type="number" name="preco"> </td> </tr>
                <tr> 
                    <td>Quantidade:</td>
                    <td> <input type="number" name="qntde"> </td> </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Enviar" name="cadastrar"/>
                    <input type="reset" value="Limpar"/> </td>
                </tr>       
            </table>
        </form>
</FIELDSET></CENTER>
<?php
        if(isset($_POST['cadastrar'])){

        $conexao = mysqli_connect("localhost", "root", "", "homer");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $marca=$_POST['marca'];
        $produto=$_POST['produto'];
        $preco=$_POST['preco'];
        $qntde=$_POST['qntde'];
        $sql = "INSERT INTO produtos (marca, produto, preco, qntde) VALUES ('$marca', '$produto', '$preco', '$qntde')";
        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado)
        { echo "<center>Erro na Gravação do Registro <br>"; }
        else 
        { echo "<center>Registro Gravado";}
    }
        ?>
</body>
</html>
