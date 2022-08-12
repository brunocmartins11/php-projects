<html><head>
<style>

#menu ul {
    padding:0px;
    margin:0px;
    background-color:#EDEDED;
    list-style:none;
}

#menu ul li { display: inline; }


#menu ul li a {
    padding: 2px 10px;
    display: inline-block;

    background-color:#EDEDED;
    color: #333;
    text-decoration: none;
    border-bottom:3px solid #EDEDED;
}


#menu ul li a:hover {
    background-color:#D6D6D6;
    color: #6D6D6D;
    border-bottom:3px solid #EA0000;
}

</style>
</head>


<body>
<nav id="menu">
    <ul>
	    <li><a href="entrada.html" target="area_exibicao">Home</a></li>
        <li><a href="cadastro.php" target="area_exibicao">Cadastrar</a></li>
        <li><a href="consulta.php" target="area_exibicao">Consultar</a></li>
		<li><a href="excluir.php" target="area_exibicao">Excluir</a></li>
		<li><a href="alterar.php" target="area_exibicao">Alterar</a></li>
        <li><a href="contato.php" target="area_exibicao" style="margin-left:55%">Contato</a></li>
    </ul>
</nav>

<iframe src="entrada.html" style="width:100%;height:90%" name="area_exibicao"> </iframe>


</body></html>