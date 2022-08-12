<doctype html>
<html lang="pt-br">
<head>
      <title> Excluir Estoque  </TITLE> 
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
    <legend> Inserir dados do produto: </legend>
        <form action="excluir.php" method="POST">
            <table>
                <tr> 
                    <td>Produto:</td>
                    <td> <input type="text" name="produto"> </td> </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Consultar" name="excluir"/>
                    <input type="reset" value="Limpar"/> </td>
                </tr>       
            </table>
        </form>
</FIELDSET></CENTER>
<?php
        if (isset($_POST['excluir'])) {
            require "conecta.php";
            $consulta = "select* from produtos where produto = '" . $_POST['produto'] . "'";
            $flag = false;

            if ($_POST['produto'] == null) {
                echo "Digite um produto";
                return;
            }
            

            $resultado = mysqli_query($conexao, $consulta);
            while ($registro = mysqli_fetch_array($resultado)) {                
                $Produto = $registro['produto'];
                $Marca = $registro['marca'];
                $Valor = $registro['preco'];
                $Quantidade = $registro['qntde'];
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
                                <td><input type="text" name="produto" value=<?php echo "'$Produto'"; ?> width="200" readonly></td>
                            </tr>

                            <tr>
                                <td> Marca </td>
                                <td> <input type="text" name="marca" value=<?php echo "'$Marca'"; ?> width="200" disabled></td>
                            </tr>
                            
                            <tr>
                                <td>Valor </td>
                                <td> <input type="text" name="preco" value=<?php echo "'$Valor'"; ?> width="200" disabled></td>
                            </tr>

                            <tr>
                                <td>Quantidade </td>
                                <td><input type="text" name="qntde" value=<?php echo "'$Quantidade'"; ?> width="200" disabled></td>
                            </tr>

                        </table>
                        <p><input type="submit" value='Excluir' name="confirmar">
                    </form>

            <?php
            }
        }

        if (isset($_POST['confirmar'])) {

            require "conecta.php";    
            $Produto = $_POST['produto'];    
            $excluindo = "delete from produtos where produto = '$Produto'";    
            $resultado = mysqli_query($conexao, $excluindo);    

            if ($resultado == false) {
    
                echo "<center>Erro na Exclusão do Registro";
            } 
            else {
    
                echo "<center>Registro Excluído";
            }
        }

            ?>
</body>
</html>
