<html>
<head><meta charset="utf-8">
<title>Exibindo os Dados </title>
</head>
<body text="red">
<?php
$n = $_POST["txtnumero"];
$r = " ";

if ($n <= 0 || $n >= 3999) {
    echo "<center> Colque um número de 0 a 3999! </center>";
}
else {
 while (($n / 1000) >= 1) {
     $r .= 'M';
     $n = $n - 1000;
 }
 while (($n / 900) >= 900) {
     $r .= 'CM';
     $n = $n - 900;
 }
 while (($n / 500) >= 1) {
     $r .= 'D';
     $n = $n - 500;
 }
 while (($n / 400) >= 1) {
     $r .= 'CD';
     $n = $n - 400;
 }
 
     while (($n / 100) >= 1) {
         $r .= 'C';
         $n = $n - 100;
     }
     while (($n / 90 ) >= 1) {
         $r .= 'XC';
         $n = $n - 90;
     }
     while (($n / 50) >= 1) {
         $n .= 'L';
         $n = $n - 50;
     }
     while (($n / 40) >= 1) {
         $r .= 'XL';
         $n = $n - 40;
     }
 

    while (($n / 10) >= 1) {
        $r .= 'X';
        $n = $n - 10;
    }
    while (($n / 9) >= 1) {
        $r .= 'IX';
        $n = $n - 9;
    }
    while (($n / 5) >= 1) {
        $r .= 'V';
        $n = $n - 5;
    }
    while (($n / 4) >= 1) {
        $r .= 'IV';
        $n = $n - 5;
    }
    while (($n / 1) >= 1) {
        $r .= 'I';
        $n = $n - 1;
    }
echo "<center> $r </center>";
}

?>
<p>
<center> <a href="index.php"> Voltar para a página de ínicio </a></center>
</body></html>