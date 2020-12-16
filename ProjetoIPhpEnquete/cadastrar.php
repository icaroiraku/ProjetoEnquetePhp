 <?php
	
$host = "localhost";
$user = "root";
$pass = "";
$banco = "votacao";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error())
           
?> 

        <html>
    <head>
        <title>Autenticando</title>
        <script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location = 'index.php'",5000);
            }
            function loginfailed(){
                setTimeout("window.location = 'cadastro.html'", 6000);
            }
            </script>
    </head>
      <body>       
               
               
<?php
           $nome = $_POST['nome'];
           $senha = $_POST['senha'];

	     // inserir dados
            $sql = "INSERT INTO aluno(nome,senha) "
            . "VALUES ('$nome','$senha') " ;
            //if ($conexao->multi_query($sql)) {
			$query = @mysql_query($sql,$conexao);
            echo "Novos registros criados com sucesso";
            echo"<script>loginsucessfully()</script>";
            //} else {
            //echo "Erro: " . $sql . "<br>" . $conexao>error."<br>";
            //echo"<script>loginfailed()</script>";
             //}
            $conexao->close();

?>
       </body>
    
</html>