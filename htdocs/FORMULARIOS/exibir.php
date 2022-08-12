<html>
<head><meta charset="utf-8">
<title>Exibindo os Dados </title>
</head>
<body text="red">
<?php
$login = $_POST["txtlogin"];
$senha = $_POST["txtsenha"];
if($login == NULL || $senha == NULL) {
echo "<center>Login e/ou senha inválido!</center>";
echo "<center> <img src='naofoi.png' width='20%' height='40%' title='negado' > </center>";
}
else 
{
echo "<center> Seu login: <b>$login</b> </center><br>";
echo "<center> Sua senha: <b>$senha</b> </center><br>";
echo "<center> <img src='foi.jpg' width='40%' height='40%' title='aceito' > </center>";
}
?>
<p>
<center> <a href="index.php"> Retornar</a></center>
</body></html>