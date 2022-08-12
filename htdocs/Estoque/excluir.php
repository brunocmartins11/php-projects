<html><head>
<title>Consultar produto</title><style type="text/css"></style></head>
<body>
<form name="Mysql" method="POST" action="excluir.php">
Digite o nome do produto para excluir

<input type="text" name="Nome"> <br><br>

<input type="submit" value="Excluir" name="excluir">
<input type="reset" value="Limpar">
</form>

<?php
        if (isset($_POST['excluir'])) {
            require "conecta.php";
            $consulta = "select* from estoque where Produto = '" . $_POST['Nome'] . "'";
            $flag = false;

            if ($_POST['Nome'] == null) {
                echo "Digite um produto";
                return;
            }
            

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {                
                $Produto = $registro['Produto'];
                $Marca = $registro['Marca'];
                $Valor = $registro['Valor'];
                $Quantidade = $registro['Quantidade'];
                $flag = true;
            }
            if ($flag == false) {
                echo "<script> alert('Registro não encontrado');</script>";
            }
             else {
        ?>

                <hr>
                <center>
                    <form action="excluir.php" method="POST">
                        <table>
                            <tr>
                                <td> Produto </td>
                                <td><input type="text" name="Produto" value=<?php echo "'$Produto'"; ?> width="200" readonly></td>
                            </tr>

                            <tr>
                                <td> Marca </td>
                                <td> <input type="text" name="Marca" value=<?php echo "'$Marca'"; ?> width="200" disabled></td>
                            </tr>
                            
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="Valor" value=<?php echo "'$Valor'"; ?> width="200" disabled></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="Quantidade" value=<?php echo "'$Quantidade'"; ?> width="200" disabled></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='Excluir' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {

            require "conecta.php";    
            $Produto = $_POST['Produto'];    
            $excluindo = "delete from estoque where Produto = '$Produto'";    
            $resultado = mysqli_query($conexao, $excluindo);    

            if ($resultado == false) {
    
                echo "<script> alert('Erro na Exclusão do Registro');  </script>";
            } 
            else {
    
                echo "<script> alert('Registro Excluído');  </script>";
            }
        }

            ?>
           
</body>
</html>

</body></html>