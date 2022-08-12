<?php

$servidor = "sql313.epizy.com";
$usuario = "epiz_27301689";
$senha = "3e8BJKYNVpHQTO";
$bd = "epiz_27301689_estoque";
$conexao = mysqli_connect($servidor,$usuario,$senha, $bd);
If ($conexao == FALSE)

{
    echo "Nao foi possivel conectar ao Banco de Dados.";
    exit;
}
?>
