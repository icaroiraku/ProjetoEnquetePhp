<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "votacao";
mysql_connect($host, $user, $pass) or die(mysql_query());
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
        <h2>Comentario</h2>
        <form name="comentario" action="Insertcomentarios.php" method="POST">
            <input type="text" name="nome" placeholder="informe o nome"><br>
            <input type="text" name="matricula" placeholder="informe a matricula"><br>
            <textarea name="comentario" id="" cols="30" rows="10" placeholder="escreve seu comentario"></textarea><br>
            <input type="submit" name="enviar" ><br>
        </form>

        <?php
        $sql = mysql_query("SELECT nome, matricula,comentario FROM comentario");
        $row = mysql_num_rows($sql);
        if ($row > 0) {
            while ($linha = mysql_fetch_array($sql)) {
                $nome = $linha['nome'];
                $matricula = $linha['matricula'];
                $comentario = $linha['comentario'];

                echo $nome;
                echo "<br><br>";
                echo $matricula;
                echo "<br><br>";
                echo $comentario;
            }
        } else {
            echo "Ainda não existe comentarios seja o primeiro";
        }
        ?>		

    </body>
</html>