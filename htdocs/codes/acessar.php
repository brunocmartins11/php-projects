
    <doctype html>
    <html lang="pt-br">
    <head>
          <title> Acesso Permitido </TITLE> 
          <meta charset="utf-8">
    </head>
    <?php
    if(isset($_POST['cadastrar'])){

    $conexao = mysqli_connect("localhost", "root", "", "cadastro");

    if ($conexao == FALSE)
    {
        echo "Não foi possível conectar-se ao PhpMyAdmin";
        exit;
    }

    $nome=$_POST['nome'];
    $login=$_POST['login'];
    $grupo=$_POST['grupo'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $sql = "INSERT INTO dados (nome, ca, grupo, email, senha) VALUES ('$nome', '$login', '$grupo', '$email', '$senha')";
    $resultado = mysqli_query($conexao, $sql);
    if (!$resultado)
    { echo "<center>Erro na Gravação do Registro <br>"; }
    else 
    { echo "<center>Registro Gravado";}
    }

    ?>
   