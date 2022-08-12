<html>
<head><title> Trabalhando com formulários em PHP </title> </head>
<body BGCOLOR="#5858FA" TEXT="WHITE"> <center>
<h2> Página de Login </h2>
<FIELDSET STYLE="WIDTH:25;HEIGHT:90;TEXT-ALIGN:CENTER;BACKGROUND:#08088A">
<LEGEND> Digite seus dados </LEGEND>
<form action="exibir.php" method="POST">
<table>
<tr> <td> Login </td>
     <td> <input type="text" name="txtlogin"/></td></tr>
<tr> <td> Senha </td>
     <td> <input type="password" name="txtsenha"/></td></tr>

<tr><td> &nbsp; </td>
    <td> <input type="submit" value="Enviar"/>
    <input type="reset" value="Limpar"/> </td>
</tr> </table>
</form>
</FIELDSET>
</body></html>