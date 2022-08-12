<html>
<head><meta charset="utf-8">
<title>Exibindo os Dados </title>
</head>
<body BGCOLOR="#F5DEB3" TEXT="black">
<?php
$numero1 = $_POST["numero"];
$impares = 1;
$cont = 0;

while ($numero1 > 0) {
  $numero1 = $numero1 - $impares;
  $impares = $impares + 2;
  $cont = $cont + 1;
}
if ($numero1 < 0){
    $cont = $cont - 1;
    echo "<center> Raiz não exata </center><br>";
    echo "<center> Raiz: $cont </center>";
}
else
{
    echo "<center> Raiz exata </center><br>";
    echo "<center> Raiz: $cont </center>";
}
?>
<p>
<center> <a href="index.php"> Retornar</a></center>
</body></html>