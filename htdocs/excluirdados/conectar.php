<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";
$conexao = mysqli_connect($servidor,$usuario,$senha, $bd);
If ($conexao == FALSE)

{
    echo "Nao foi possivel conectar ao Banco de Dados.";
    exit;
}
?>