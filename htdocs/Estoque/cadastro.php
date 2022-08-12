<html>

<head>
    <title>Cadastrar Registro</title>
    <style type="text/css"></style>
</head>

<body>
    <center>

        <fieldset style="width:40%;TEXT-ALIGN:center;BACKGROUND:#E3FFFF">
            <legend>CADASTRO DE PRODUTOS</legend>
            <form name="Mysql" method="POST" action="cadastro.php">
                <p>Marca <input type="text" name="Marca"> </p>
                <p>Produto <input type="text" name="Produto"> </p>
                <p>Valor <input type="text" name="Valor"> </p>
                <p>Quantidade <input type="number" name="Quantidade"> </p>
                <p>
                    <input type="submit" value="Salvar" name="cadastrar">
                    <input type="reset" value="Limpar">
                </p>
            </form>

        </fieldset>

        <?php
        if(isset($_POST['cadastrar'])){
        $conexao = mysqli_connect("sql313.epizy.com", "epiz_27301689", "3e8BJKYNVpHQTO", "epiz_27301689_estoque");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $Nome = $_POST['Marca'];
        $Cidade = $_POST['Produto'];
        $Telefone = $_POST['Valor'];
        $Quantidade = $_POST['Quantidade'];
        $sql = "INSERT INTO estoque (Marca, Produto, Valor, Quantidade)
         VALUES ('$Nome', '$Cidade', '$Telefone', '$Quantidade')";
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