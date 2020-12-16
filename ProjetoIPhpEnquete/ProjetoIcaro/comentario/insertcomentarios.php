<script type="text/javascript">
            function loginsucessfullyAluno(){
				// Colocar pagina do aluno
                setTimeout("window.location ='comentarios.php'",3000);
            }
            </script>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "votacao";
	mysql_connect($host,$user,$pass) or die (mysql_query()) ;
	mysql_select_db($banco) or die(mysql_error());
 ?>
<?php
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$comentario = $_POST['comentario']; 
 ?>
 <?php
 	$insert = "INSERT INTO comentario (matricula, nome , comentario) VALUES ('$matricula', '$nome', '$comentario')";
 	$query = mysql_query($insert);
 	echo "<center>Obrigado seu comentario foi enviado</center>" ;
        echo "<script>window.location ='comentarios.php'</script>"
  ?>