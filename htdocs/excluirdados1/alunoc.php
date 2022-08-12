<html>
<head>
<title> Consultar registro do aluno </title> 
</head>
<style> 
    fieldset {
        width: 180px;
        
    }
    </style>
<body>
<center> <fieldset> 
<legend> Consultar alunos:</legend>
<form method="POST" action="alunoa.php">
Digite o RM:
<input type="text" name="rm"> <br> <br>
<input type="submit" value="Consultar" name="consultar">
<input type="reset" value="Limpar">
</form>
</fieldset> </center>
<?php
if (isset($_POST['consultar'])) {
    require "alunoaco.php";
    $flag=false;
    $consulta = "select * from alunos where rm= " . $_POST['rm'];
    $resultado = mysqli_query($conexao, $consulta);
    while ($registro = mysqli_fetch_array($resultado))
    {
        $rm = $registro['rm'];
        $nome=$registro['nome'];
        $endereco=$registro['endereco'];
        $bairro=$registro['bairro'];
        $cidade=$registro['cidade'];
        $estado=$registro['estado'];
        $cep=$registro['cep'];
        $celular=$registro['celular'];
        $telefone=$registro['telefone'];
        $flag=true;
    }
    if ($flag==false)
    {
        echo "<center> <h1> Registro não Encontrado </h1> </center>";
    }
    else
    {
        ?>
        <hr> <center>
        <form action="alunoa.php" method="POST">
        <table>
        <tr>
        <td>RM do Aluno</td><td><input type="number" name="rm" value=<?php echo $rm; ?> widht="200" reandoly></td>
        <td>Nome: </td><td><input type=text name="nome" value=<?php echo "$nome"; ?> widht="200" disabled></td></tr>
        <td>Endereço: </td><td><input type=text name="endereco" value=<?php echo "$endereco"; ?> widht="200" disabled></td></tr>
        <td>Bairro: </td><td><input type=text name="bairro" value=<?php echo "$bairro"; ?> widht="200" disabled></td></tr>
        <td>Cidade: </td><td><input type=text name="cidade" value=<?php echo "$cidade"; ?> widht="200" disabled></td></tr>
        <td>Estado: </td><td><input type=text name="estado" value=<?php echo "$estado"; ?> widht="200" disabled></td></tr>
        <td>CEP: </td><td><input type=text name="cep" value=<?php echo "$cep"; ?> widht="200" disabled></td></tr>
        <td>Celular: </td><td><input type=text name="celular" value=<?php echo "$celular"; ?> widht="200" disabled></td></tr>
        <td>Telefone: </td><td><input type=text name="=telefone" value=<?php echo "$telefone"; ?> widht="200" disabled></td></tr>
        </table>
        <p><input type="submit" value='Excluir' name="confirmar">
        </form>
    </head>
    </body>