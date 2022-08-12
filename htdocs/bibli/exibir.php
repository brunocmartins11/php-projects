<html>
<head><meta charset="utf-8">
<title>Cadastro de Alunos </title>
</head>
<body>
<?php
if(isset($_POST['Enviar'])){
        $conexao = mysqli_connect("localhost", "root", "", "biblioteca");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $rm=$_POST['rm'];
        $nome=$_POST['nome'];
        $endereco=$_POST['endereco'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        $cep=$_POST['cep'];
        $celular=$_POST['celular'];
        $telefone=$_POST['telefone'];
        $sql = "INSERT INTO biblioteca (rm, nome, endereco, bairro, cidade, estado, cep, celular, telefone) VALUES ('$rm', '$nome', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$celular', '$telefone')";
        $resultado = mysqli_query($conexao, $sql);

        if (!$resultado)
        { echo "Erro na Gravação do Registro <br>"; }
        else 
        { echo "Registro Gravado";}
}
        ?>

        <p><center><a href="index.php">Voltar</a>
    </body>
    </html>