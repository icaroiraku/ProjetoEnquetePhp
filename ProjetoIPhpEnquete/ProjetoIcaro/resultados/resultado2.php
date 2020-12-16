<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "votacao";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

$valor = mysql_query("SELECT * FROM votacao WHERE voto = 1");
$valor1 = mysql_query("SELECT * FROM votacao WHERE voto = 2");
$valor2 = mysql_query("SELECT * FROM votacao WHERE voto = 3");
$valor3 = mysql_query("SELECT * FROM votacao WHERE voto = 4");
$valor4 = mysql_query("SELECT * FROM votacao WHERE voto = 5");
$valor5 = mysql_query("SELECT * FROM votacao WHERE voto = 6");
$valor6 = mysql_query("SELECT * FROM votacao WHERE voto = 7");
?>

<html>
    <head>
    </head>
    <body>
            <h1>resultados</h1>
            <br/>
            Salvador:<?php echo mysql_num_rows($valor); ?><br/>
            Caue:<?php echo mysql_num_rows($valor1); ?><br/>
            joseneuza:<?php echo mysql_num_rows($valor2); ?><br/>
            Jorge Targino:<?php echo mysql_num_rows($valor3); ?><br/>
            Websters:<?php echo mysql_num_rows($valor4); ?><br/>
            Rosa Maria:<?php echo mysql_num_rows($valor5); ?><br/>
            Giselle machado:<?php echo mysql_num_rows($valor6); ?><br/>
            <form action="index2.php">
                 <input type="submit" name="voltar" value="voltar" />
               </form>
    </body>
</html>