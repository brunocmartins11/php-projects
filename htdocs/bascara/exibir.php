<html>
<head><meta charset="utf-8">
<title>Exibindo os Calculos da Bhaskara </title>
</head>
<body bgcolor=" #ffdb58">
<?php
$numa = $_POST["txta"];
$numb = $_POST["txtb"];
$numc = $_POST["txtc"];
$delta;
$x1;
$x2;
$bnegativo;
$aux;
$rdelta;

if ($numa == NULL or $numb == NULL or $numc == NULL) {
    echo "<center><h1> Por favor, coloque um número em todas as opções! </h1></center>";
}
else if ($numa == 0) {
    echo "<center><h1> O número X² precisa ser diferente de zero! </h1></center>";
}
else {
    $aux = 4*$numa*$numc;
    $delta = pow($numb,2)-$aux;

    if ($delta < 0) {
       echo "<center><h1> Não há raízes, pois o delta é menor que zero!</h1></center>";
    }
    else { 
        $rdelta = sqrt($delta);
        $x1 = $bnegativo + $rdelta / (2*$numa);
        $x2 = $bnegativo - $rdelta / (2*$numa);
        echo "<center> <h1>O primeiro resultado é: <b>$x1</b> </h1></center>";
        echo "<center> <h1>O segundo resultado é: <b>$x2</b> </h1></center>";
        echo "<center> <h1>O valor de delta é: <b>$delta</b> </h1></center>";
    }
}
?>
<p>
<center> <a href="index.php">Voltar</a></center>
</body></html>