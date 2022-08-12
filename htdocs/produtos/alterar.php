<doctype html>
<html lang="pt-br">
<head>
      <title> Estoque </TITLE> 
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
        <form action="alterar.php" method="POST">
            <table>
            <tr> 
                    <td>Produto:</td>
                    <td> <input type="text" name="produto"> </td> </tr>
                    <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Enviar" name="alterar"/>
                    <input type="reset" value="Limpar"/> </td>
                </tr>       
            </table>
        </form>
        </fieldset>
    </center>
    <?php
        if (isset($_POST['alterar'])) {
            require "conecta.php";
            $conexao= mysqli_connect("localhost", "root","","homer");
            $consulta = "select* from produtos where produto = '" . $_POST['produto'] . "'";
            $flag = false;

            if ($_POST['produto'] == "") {
                echo "Digite um produto";
                return;
            }

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {
                $Marca = $registro['marca'];
                $Produto = $registro['produto'];
                $Valor = $registro['preco'];
                $Quantidade = $registro['qntde'];
                $flag = true;
            }
            if ($flag == false) {
                echo "<script> alert('Registro não encontrado');</script>";
            } else {
        ?>

                <hr>
                <center>
                    <form action="alterar.php" method="POST">
                        <table>
                            <tr>
                                <td> Marca </td>
                                <td> <input type="text" name="marca" value=<?php echo "'$Marca'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td> Produto </td>
                                <td><input type="text" name="produto" value=<?php echo "'$Produto'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="preco" value=<?php echo "'$Valor'"; ?> width="200"></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="qntde" value=<?php echo "'$Quantidade'"; ?> width="200"></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='Alterar' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {
            require "conecta.php";
            $Produto = $_POST['produto'];
            $Marca = $_POST['marca'];
            $Valor = $_POST['preco'];
            $Quantidade = $_POST['qntde'];
            $alterando = "update produtos set marca = '$Marca', preco='$Valor', qntde='$Quantidade' where produto = '$Produto' ";
            $resultado = mysqli_query($conexao, $alterando);

            if ($resultado == true) {
                echo "<center>Registro alterado";
            } else {
                echo "<center>Ocorreu um erro ao tentar alterar o registro";
            }
        }

            ?>
                </center>
</body>
</html>