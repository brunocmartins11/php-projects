<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

    <Style>
        body {
            background-color: lightblue;
            text-align: center;
            text-align: 40px;
            font-size: 20px;
            font-family: Arial, 'Times New Roman', Times, serif;
        }
        fieldset {

            height: 115px;

            width: 200px;

            text-align: center;

            background-color: coral;

        }
    </Style>

<body>

    <center>

        <fieldset>

            <form method="POST" action="exclui.php">

                DIGITE O PRODUTO

                <input type="text" name="produto"> <br><br>

                <input type="submit" value="Consultar" name="excluir">

                <input type="reset" value="Limpar">

        </fieldset>

    </center>

    </form>

    <?php
        if (isset($_POST['excluir'])) {
            require "conectar.php";
            $consulta = "select* from estoque where produto = '" . $_POST['produto'] . "'";
            $flag = false;

            if ($_POST['produto'] == null) {
                echo "Digite um produto";
                return;
            }
            

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {                
                $Produto = $registro['produto'];
                $Marca = $registro['marca'];
                $Valor = $registro['valor'];
                $Quantidade = $registro['quantidade'];
                $flag = true;
            }
            if ($flag == false) {
                echo "<script> alert('Registro não encontrado');</script>";
            }
             else {
        ?>

                <hr>
                <center>
                    <form action="exclui.php" method="POST">
                        <table>
                            <tr>
                                <td> Produto </td>
                                <td><input type="text" name="produto" value=<?php echo "'$Produto'"; ?> width="200" readonly></td>
                            </tr>

                            <tr>
                                <td> Marca </td>
                                <td> <input type="text" name="marca" value=<?php echo "'$Marca'"; ?> width="200" disabled></td>
                            </tr>
                            
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="valor" value=<?php echo "'$Valor'"; ?> width="200" disabled></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="quantidade" value=<?php echo "'$Quantidade'"; ?> width="200" disabled></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='Excluir' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {

            require "conectar.php";    
            $Produto = $_POST['produto'];    
            $excluindo = "delete from estoque where produto = '$Produto'";    
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