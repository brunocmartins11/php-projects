<doctype html>
<html lang="pt-br">
<head>
      <title> Cadastro  </TITLE> 
	  <meta charset="utf-8">
</head>
<link rel="stylesheet" href="estilo_site.css" type="text/css">
<body>
<center><fieldset> 
    <legend> Inserir dados: </legend>
        <form action="cadastrar.php" method="POST">
            <table>
                    <td>Nome:</td>
                    <td> <input type="text" name="nome"> </td> </tr>
                <tr> 
                    <td>Login:</td>
                    <td> <input type="text" name="login"> </td> </tr>
                <tr> 
                    <td>Senha:</td>
                    <td> <input type="password" name="senha"> </td> </tr>
                <tr> 
                    <td>Email:</td>
                    <td> <input type="text" name="email"> </td> </tr>
                <tr>
                <tr> 
                    <td>Celular:</td>
                    <td> <input type="text" name="celular"> </td> </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Enviar" name="cadastrar" class="botoes"/>
                    <input type="reset" value="Limpar" class="botoes"/> </td>
                </tr>       
            </table>
        </form>
</FIELDSET></CENTER>
<?php
        if(isset($_POST['cadastrar'])){

        $conexao = mysqli_connect("localhost", "root", "", "login");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $nome=$_POST['nome'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        $email=$_POST['email'];
        $celular=$_POST['celular'];
        $sql = "INSERT INTO dados (nome, login, senha, email, celular) VALUES ('$nome', '$login', '$senha', '$email', '$celular')";
        $resultado = mysqli_query($conexao, $sql);
        if (!$resultado)
        { echo "<center>Erro na Gravação do Registro <br>"; }
        else 
        { echo "<center>Registro Gravado";}
    }
 
        ?>
        <center><p><input type="button" value="Voltar" class="botoes" onclick="window.location.href='index.php'"></p></center>
</body>
</html>
