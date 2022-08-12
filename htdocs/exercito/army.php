<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador De Batalhas</title>
    <link rel="stylesheet" href="css.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <?php
    $nome = $_POST["nomeExercito"];
    $qtd = $_POST["numeroUnidade"];
    $nome2 = $_POST["nomeExercito2"];
    $qtd2 = $_POST["numeroUnidade2"];

    echo "<center> <h1> Seu exército é de:</h1> <br> <h2> $qtd </h2></center>";



 ?>

<div class="menu">
    <h1 class="menu"> Exércitos RPG </h1>
    <ul class="menu">
		<li class="botoes">Calculador de Exércitos</li> 
		<li class="botoes"> Informações do RPG </li>
    </div>

    <div class="menu">
    <form action="index.html">
    <input type="submit" value="Voltar">

    </form>

    </div>
</body>
</html>