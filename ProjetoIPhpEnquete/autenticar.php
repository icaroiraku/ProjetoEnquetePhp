<?php
$host="localhost";
$user="root";
$pass="";
$banco="votacao";
$conexao=mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
 
           
           

<html>
    <head>
        <title>Autenticando</title>
        <script type="text/javascript">
            function loginsucessfullyAluno(){
				// Colocar pagina do aluno
                setTimeout("window.location ='projeto.php'",3000);
            }
			function loginsucessfullyProfessor(){
                // Colocar pagina do professor
				setTimeout("window.location ='projeto.php'",3000);
            }
            function loginfailed(){
                setTimeout("window.location =index.php'",1500);
            }
            </script>
    </head>
<body>
<?php
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    //procura usuario e senha
   $sqlAluno = mysql_query("SELECT * FROM aluno WHERE idmatricula = '$matricula' and senha = '$senha'");
   $sqlProfessor = mysql_query("SELECT * FROM professor WHERE idmatricula = '$matricula' and senha = '$senha'");
    $rowAluno = mysql_num_rows($sqlAluno);
	$rowProfessor = mysql_num_rows($sqlProfessor);
    if($rowAluno > 0){
        session_start();
	    $_SESSION['matricula'] = $_POST['matricula'];
        $_SESSION['senha'] = $_POST['senha'];
        echo"autenticado com sucesso! aguarde";
        echo"<script>loginsucessfullyAluno()</script>";
    }  
	else if ($row Professor > 0){
			session_start();
	$_SESSION['matricula'] = $_POST['matricula'];
        $_SESSION['senha'] = $_POST['senha'];
        echo"autenticado com sucesso! aguarde";
        echo"<script>loginsucessfullyProfessor()</script>";
	}
	else {
       echo"nome de usuario ou senha invalidos! tente novamente";
       echo"<script>loginfailed()</script>";    
}    
?>
</body>   
</html>

