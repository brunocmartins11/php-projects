<doctype html>
<html lang="pt-br">
<head>
      <title> Consultar Estoque</TITLE> 
	  <meta charset="utf-8">
</head>
<link href="produtos.css" rel="stylesheet">

<body>
    <nav id="menu">
        <ul>
        <li> <a href="home.php"> Homer </a></li>
        <li>  <a href="cadastrar.php">Cadastrar </a></li>
        <li>  <a href="consultar.php">Consultar </a></li>
        <li>  <a href="excluir.php">Excluir </a></li>
        <li>  <a href="alterar.php">Alterar </a></li>
        <li> <a href="contato.php">Contato </a> </li>
        <ul>
    </nav>
        
    <center><fieldset> 
            <legend> Contato </legend>
            <form action="contato.php" method="POST">
            <table>
            <tr> 
                    <td>Nome: </td>
                    <td> <input type="text" name="nome"> </td> </tr>
                    <td>Email: </td>
                    <td> <input type="text" name="email"> </td> </tr>
                    <td>Dúvidas/Críticas/Sugestões: </td> <p>
                    <td><textarea name="duvidas" cols="25" rowls="40"></textarea> </td> </tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Enviar" name="enviar"/>
                    <input type="reset" value="Limpar"/> </td>
                </tr>       
            </table>
        </form></fieldset></center>

        <?php
        if(isset($_POST['enviar'])){

        $conexao = mysqli_connect("localhost", "root", "", "homer");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $duvidas=$_POST['duvidas'];
        $sql = "INSERT INTO contato (nome, email, duvidas) VALUES ('$nome', '$email', '$duvidas')";
        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado)
        { echo "<center>Erro no envio <br>"; }
        else 
        { echo "<center>Enviado";}
    }
        ?>
</body>
</html>
