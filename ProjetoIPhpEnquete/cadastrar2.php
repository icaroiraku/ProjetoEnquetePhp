 <?php
	$nome_servidor = "localhost";
	   $nome_usuario = "root";
	      $senha="";
		    $banco="votacao";
			//fazer conexão 
                         $conecta = new mysqli($nome_servidor, $nome_usuario,$senha,$banco);
           
?>

        <html>
    <head>
        <title>Autenticando</title>
        <script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location = 'index2.php'",5000);
            }
            function loginfailed(){
                setTimeout("window.location = 'cadastro.html'", 6000);
            }
            </script>
    </head>
      <body>       
               
               
<?php
           $matricula = $_POST['matricula'];
                    $senha = $_POST['senha'];

	     // inserir dados
            $sql = "INSERT INTO pessoas(matricula,senha) "
            . "VALUES ('$matricula','$senha') " ;
            if ($conecta->multi_query($sql) === TRUE) {
            echo "Novos registros criados com sucesso";
            echo"<script>loginsucessfully()</script>";
            } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            echo"<script>loginfailed()</script>";
             }
            $conecta->close();

?>
       </body>
    
</html>