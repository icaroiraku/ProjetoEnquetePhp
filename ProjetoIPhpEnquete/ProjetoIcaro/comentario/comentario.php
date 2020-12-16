<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "votacao";
	mysql_connect($host,$user,$pass) or die (mysql_query()) ;
	mysql_select_db($banco) or die(mysql_error());
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
		<form name="comentario" action="Insertcomentarios.php" method="POST">
			<input type="text" name="nome">
			<input type="text" name="matricula" >
			<textarea name="comentario" id="" cols="30" rows="10"></textarea>
			<input type="submit" name="enviar">
		</form>

<?php
 	$sql = mysql_query("SELECT * from comentarios");
 	$query = mysql_query($sql);
 	$row = mysql_num_rows($sql);
 	if ($row > 0 )
 	{
 		while ($linha = mysql_fetch_array($sql)) 
 		{
 			$nome = $linha['nome'];
 			$matricula = $linha['matricula'];
 			$comentario = $linha['comentario'];

 			echo $nome;
 			echo "<br><br>";
 			echo $matricula;
 			echo "<br><br>";
 			echo $comentario;
 		}
 	}
        else
 		{
 			echo "Ainda não existe comentarios seja o primeiro";
 		}
?>		
	
</body>
</html>