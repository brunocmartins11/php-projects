<html><head>
<title>Consultar produto</title><style type="text/css"></style></head>
<body>
<form name="Mysql" method="POST" action="alterar.php">
Digite o nome do produto para consultar

<input type="text" name="Nome"> <br><br>

<input type="submit" value="Consultar" name="alterar">
<input type="reset" value="Limpar">
</form>

<?php
        if (isset($_POST['alterar'])) {
            require "conecta.php";
            $conexao = mysqli_connect("sql313.epizy.com", "epiz_27301689", "3e8BJKYNVpHQTO", "epiz_27301689_estoque");
            $consulta = "select* from estoque where Produto = '" . $_POST['Nome'] . "'";
            $flag = false;

            if ($_POST['Nome'] == "") {
                echo "Digite um produto";
                return;
            }

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {
                $Marca = $registro['Marca'];
                $Produto = $registro['Produto'];
                $Valor = $registro['Valor'];
                $Quantidade = $registro['Quantidade'];
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
                                <td> <input type="text" name="var_Marca" value=<?php echo "'$Marca'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td> Produto </td>
                                <td><input type="text" name="var_Produto" value=<?php echo "'$Produto'"; ?> width="200"></td>
                            </tr>
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="var_Valor" value=<?php echo "'$Valor'"; ?> width="200"></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="var_Quantidade" value=<?php echo "'$Quantidade'"; ?> width="200"></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='alterar' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {
            require "conecta.php";
            $Produto = $_POST['var_Produto'];
            $Marca = $_POST['var_Marca'];
            $Valor = $_POST['var_Valor'];
            $Quantidade = $_POST['var_Quantidade'];
            $alterando = "update estoque set 'Marca = '$Marca', Valor='$Valor', Quantidade='$Quantidade' where Produto = '$Produto' ";
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