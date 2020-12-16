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
            function loginsucessfully(){
                setTimeout("window.location ='resultado2.php'",3000);
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
   $sql = mysql_query("SELECT * FROM pessoas WHERE matricula = '$matricula' and senha = '$senha'");
    $row =mysql_num_rows($sql);
    if($row>0){
        session_start();
	$_SESSION['matricula'] = $_POST['matricula'];
        $_SESSION['senha'] = $_POST['senha'];
        echo"autenticado com sucesso! aguarde";
        echo"<script>loginsucessfully()</script>";
    }  else {
       echo"nome de usuario ou senha invalidos! tente novamente";
       echo"<script>loginfailed()</script>";
       
} 
    
?>
    </body>
    
</html>

