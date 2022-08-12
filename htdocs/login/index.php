<doctype html>
<html lang="pt-br">
<head>
      <title> Tela de login  </TITLE> 
	  <meta charset="utf-8">
</head>
<link rel="stylesheet" href="estilo_site.css" type="text/css">
<body>
<center><fieldset> 
    <legend> Faça seu login: </legend>
        <form action="index.php" method="POST">
            <table>
                <tr><td>Login:</td>
                    <td> <input type="text" name="login"> </td> </tr>
                <tr> 
                    <td>Senha:</td>
                    <td> <input type="password" name="senha"> </td> </tr>
                    <tr>
                    <td> &nbsp; </td>
                    <td> <input type="submit" value="Login" name="login2" class="botoes"/>
                    <input type="reset" value="Limpar" class="botoes"/> 
                    <input type="button" value="Cadastrar" class="botoes" onclick="window.location.href='cadastrar.php'">
                </td>
                </tr>
            </table></form></fieldset></center>
        <?
         if(isset($_POST['login2'])){

            $conexao= mysqli_connect("localhost", "root","","login");
            $flag=false;
                if($_POST["login"] == $login and $_POST["senha"] == $senha){
                    echo "Login efetuado com sucesso";
                }else{
                    echo "Login ou senha inválido";
                }
            }
        
            ?>
            </body>
            </html>