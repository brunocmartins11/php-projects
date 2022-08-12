<html>
    <head>
        <title> Cadastro </title>
    </head>
    <body>
        <?php
        $conexao = mysqli_connect("localhost", "root", "", "cadastro");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }
        $nome=$_POST['nome'];
        $cidade=$_POST['cidade'];
        $telefone=$_POST['telefone'];
        $sql = "INSERT INTO cliente (CodigoCliente, nome, cidade, telefone) VALUES (NULL, '$nome', '$cidade', '$telefone')";
        $resultado = mysqli_query($conexao, $sql);

        if (!$resultado)
        { echo "Erro na Gravação do Registro <br>"; }
        else 
        { echo "Registro Gravado";}
        ?>

        <p><a href="incluir.html">Voltar</a>
    </body>
    </html>