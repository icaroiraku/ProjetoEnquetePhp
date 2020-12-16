<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "votacao";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

$matricula = $_SESSION['matricula'];
$voto = $_POST['radio'];
$comentario = $_POST['comentarios'];

if ($voto <> "") {
    $query = mysql_query("INSERT INTO votacao (id_matricula,voto) VALUES('$matricula','$voto')");
}
?>

