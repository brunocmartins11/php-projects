<html>

<head>
<meta charset="utf-8">
</style>
<title> Exibindo o  mês</title>
</head>
<body>
<center>
<h2>Exercício com Switch em PHP</h2>
<h3>Digite um número entre 1 e 12 para a exibição do mês correspondente</h3><p>
<form method="post" action="index.php">
<input type="text" name="numero">
<input type="submit" value="Escrever" name="escrever">
<input type="reset" value="Limpar">
</form>
<?php
if (isset($_POST['escrever']))
{
    $mes = $_POST['numero'];
    switch ($mes) {
        case 1:
            echo "Janeiro";
        break;
        
        case 2:
            echo "Fevereiro";
        break;
        
        case 3:
            echo "Março";
        break;

        case 4:
        echo "Abril";
        break;
        
        case 5:
        echo "Maio";
        break;
        
        case 6:
        echo "Junho";
        break;
        
        case 7:
        echo "Julho";
        break;
        
        case 8:
        echo "Agosto";
        break;
        
        case 9:
        echo "Setembro";
        break;
        
        case 10:
        echo "Outubro";
        break;
        
        case 11:
        echo "Novembro";
        break;
        
        case 12:
        echo "Dezembro";
        break;
        
        default:
        echo 'Digite um número entre 1 e 12.';
        break;
        }
        }
?>
</body>
</html>