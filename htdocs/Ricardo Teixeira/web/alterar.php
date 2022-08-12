<html>
<head>
<title> Aterando registro </title></head>
<body>
<form method="POST" action="alterar.php">
Digite o nome do produto
<input type="text" name="produto"> <br><br>
<input type="submit" value="Consultar" name="alterar">
<input type="reset" value="Limpar">
</form>
<?php
        if (isset($_POST['alterar'])) {
            require "conectar.php";
            $conexao= mysqli_connect("localhost", "root","","produtos");
            $consulta = "select* from estoque where produto = '" . $_POST['produto'] . "'";
            $flag = false;

            if ($_POST['produto'] == "") {
                echo "Digite um produto";
                return;
            }

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {
                $Marca = $registro['marca'];
                $Produto = $registro['produto'];
                $Valor = $registro['valor'];
                $Quantidade = $registro['quantidade'];
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
                                <td> <input type="text" name="var_marca" value=<?php echo "'$Marca'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td> Produto </td>
                                <td><input type="text" name="var_produto" value=<?php echo "'$Produto'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="var_valor" value=<?php echo "'$Valor'"; ?> width="200"></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="var_quantidade" value=<?php echo "'$Quantidade'"; ?> width="200"></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='alterar' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {
            require "conectar.php";
            $Produto = $_POST['var_produto'];
            $Marca = $_POST['var_marca'];
            $Valor = $_POST['var_valor'];
            $Quantidade = $_POST['var_quantidade'];
            $alterando = "update estoque set marca = '$Marca', valor='$Valor', quantidade='$Quantidade' where produto = '$Produto' ";
            $resultado = mysqli_query($conexao, $alterando);

            if ($resultado == true) {
                echo "<script> alert('Registro Alterado com sucesso');
            </script>";
            } else {
                echo "<script> alert('Ocorreu um erro ao tentar alterar o registro.');
            </script>";
            }
        }

            ?>
</body></html>