<html>
<head><meta charset="utf-8">
<title>Exibindo os Dados do Triângulo </title>
</head>
<body>
<?php
$ladoa = $_POST["txtladoa"];
$ladob = $_POST["txtladob"];
$ladoc = $_POST["txtladoc"];
if ($ladoa <0 or $ladob <0 or $ladoc <0) {
    echo "<center><h1> Por favor, coloque um número maior que 0! </h1></center>";
    echo "<center> <img src='triste.png' width='20%' height='40%' title='triste' > </center>";
}
else if ($ladoa ==NULL or $ladob ==NULL or $ladoc ==NULL) { 
    echo "<center><h1> Números Inválidos! </h1></center>";
    echo "<center> <img src='triste.png' width='20%' height='40%' title='triste' > </center>";
}

else if ($ladoa == $ladob && $ladob == $ladoc) {
    echo "<center><h1> Triângulo Equilátero </h1></center>";
    echo "<center> <img src='tequilatero.png' width='20%' height='40%' title='equilatero' > </center>";
}
else if  ($ladoa != $ladob &&  $ladoc != $ladob && $ladoc != $ladoa) {
    echo "<center><h1> Triângulo Escaleno </h1></center>";
    echo "<center> <img src='escaleno.png' width='20%' height='40%' title='escaleno' > </center>";
}
else if ($ladoa == $ladob or $ladob == $ladoc or $ladoc == $ladoa) {
    echo "<center><h1> Triângulo Isósceles </h1></center>";
    echo "<center> <img src='isosceles.png' width='20%' height='40%' title='isosceles' > </center>";
}
?>
<p>
<center> <a href="index.php"> Voltar para a página de início </a></center>
</body></html>
