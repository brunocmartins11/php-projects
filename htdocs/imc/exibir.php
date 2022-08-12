<html>
<head><meta charset="utf-8">
<title>Exibindo os Dados do IMC </title>
</head>
<body>
<?php
$peso = $_POST["txtpeso"];
$altura = $_POST["txtaltura"];
$imc;
$x;
$x = $altura*$altura;
$imc = $peso/$x;
echo "<center><img src='tabela.png' width='50%' height='35%' title='tabela' > </center>";
if ($imc < 18.5){
    echo "<center> <h1> Baixo peso! </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
else if ($imc >= 18.5 and  $imc <= 24.9){
    echo "<center> <h1> Peso normal! </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
else if ($imc >= 25 and $imc <=29.9 ){
    echo "<center> <h1> Sobrepeso! </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
else if ($imc >= 30 and $imc <= 34.9) {
    echo "<center> <h1> Obeso I </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
else if ($imc >= 35 and $imc <= 39.9) {
    echo "<center> <h1> Obeso II </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
else if ($imc >=40){
    echo "<center> <h1> Obeso III  </h1> </center>";
    echo "<center> <h1> IMC: $imc </h1> </center>";
}
?>
<p>
<center> <a href="index.php"> Voltar para a página de início </a></center>
</body></html>