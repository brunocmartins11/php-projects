<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <center>
            <legend> Inserir Dados: </legend>
            <form action="cadastro.php" method="POST">
               <table>
                    <tr>
                        <td>Marca:</td>
                        <td> <input type="text" name="marca"> </td>
                    </tr>
                    <tr>
                        <td>Produto:</td>
                        <td> <input type="text" name="produto"> </td>
                    </tr>
                    <tr>
                        <td>Valor:</td>
                        <td> <input type="number" name="valor"> </td>
                    </tr>
                    <tr>
                        <td>Quantidade:</td>
                        <td> <input type="number" name="quantidade"> </td>
                   </tr>
                   <tr>
                        <td> &nbsp; </td>
                        <td> <input type="submit" value="Enviar" name="cadastrar" />
                            <input type="reset" value="Limpar" /> </td>
                    </tr>
                </table>
            </form>
        </center>
</fieldset>
<?php
        if(isset($_POST['cadastrar'])){
            
        $conexao= mysqli_connect("localhost", "root","","produtos");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $marca = $_POST['marca'];
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $valor = $_POST['valor'];
        $sql = "INSERT INTO estoque (marca, produto, quantidade, valor)
         VALUES ('$marca', '$produto', '$quantidade', '$valor')";
        $resultado = mysqli_query($conexao, $sql);

         if (!$resultado)
         {

             echo "Erro na Gravação do Registro <br>";
         }

         else
         {

            echo "Registro Gravado";
         }
        }
    ?>

</body>
</html>