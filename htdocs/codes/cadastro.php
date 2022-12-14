<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Cadastro</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/styles/index.css" type="text/css" />
</head>

<body>

    <div class="midcadastro efeito-vidro">
        <h1>CADASTRO DO FUNCIONÁRIO</h1>
        <br>
        <br>
        <form action="acessar.php" method="POST" name="form">

            <div class="field">
                <input type="text" name="nome" placeholder="Digite seu Nome">
                <label for="login">Nome do Funcionário:</label>
            </div>
            <div class="field">
                <input type="text" name="login" placeholder="Digite sua CA">
                <label for="login">CA do Funcionário:</label>
            </div>
            
            <div class="field">
                <input type="text" name="grupo" placeholder="Digite sua CA">
                <label for="login">Código do Grupo:</label>
            </div>

            <div class="field">
                <input type="email" name="email" placeholder="funcionario@volkswagen.com.br">
                <label for="login">E-mail:</label>
            </div>

            <div class="field">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <label for="senha">Senha:</label>
            </div>

            <div class="center">
                <center><input class="button efeito" type="submit" value="Cadastrar-se"</center>
            </div>
            <div class="center">
                <input class="button efeito" type="button" value="Voltar" onclick="window.location.href='index.html'">
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['cadastro'])){

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

</body>
</html>