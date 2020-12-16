3. Criar o PHP que fará todo o trabalho: 
  
Cria um arquivo chamado votação.php e dentro dele coloque o seguinte código que será explicado detalhadamente:
 
<?
 
if ($escolha != "") { // Verifica se foi inserido um voto e prossegue em frente no caso de verdade
 
// Variáveis a serem alteradas
 
$mysql_host = ""; // local do servidor MySQL
$mysql_user = "": // utilizador do MySQL
$mysql_pass = ""; // senha do utilizador do MySQL
$mysql_dtbs = ""; // base de dados onde a tabela foi criada
 
$num_resp = ""; // número de opções na tua votação
$pergunta = ""; // pergunta da votação
 
// Nada mais a ser alterado
 
$mysql_conx = mysql_connect($mysql_host,$mysql_user,$mysql_pass);
// ligação ao MySQL
 
$radio = $num_resp + 1;
// para uso posterior
 
mysql_select_db($mysql_dtbs);
// seleciona a base de dados
 
// aqui começa todo o trabalho do PHP para atualizar a base de dados
 
$query_upd = "SELECT * FROM votacao WHERE id=$escolha";
$resul_upd = mysql_query($query_upd);
// aqui o PHP seleciona apenas os registos que coincidem com a escolha, neste 
// caso so uma opção
 
$obj_upd = mysql_fetch_object($resul_upd);
// o comando mysql_fetch_object() separa os resultados de uma query por colunas
// neste caso, $obj_upd -> descrição da opção que o utilizador votou
 
$vot_upd = $obj_upd->votos;
$vot_upd++;
// separa só os votos e adicinona mais um voto
 
$upd_upd = "UPDATE votacao SET votos=$vot_upd WHERE id=$escolha";
mysql_query($upd_upd);
// atualizou a base de dados
 
// Agora o PHP fará a pesquisa na base de dados e retornará as opções, seus 
// respectivos votos, total de votos e a sua escolha.
 
echo "<H3>" . $pergunta . "</H3>";
 
for($i=1;$i<$radio;$i++) {
 
$query[$i] = "SELECT * FROM votação WHERE id=$i";
$resul[$i] = mysql_query($query[$i]);
$objet[$i] = mysql_fetch_object($resul[$i]);
 
echo "<FONT FACE="Verdana" SIZE="1"><B>" . $objet[$i]->opcao . "</B> " . $objet[$i]->descricao . "<B> " . $objet[$i]->votos . "</B><BR>";
 
$tot_vt += $objet[$i]->votos;
 
// tudo isto serve para requisitar o resultado de cada opção e exibir na tela//;
 
}
echo "<FONT SIZE="1"><B>Total de votos:</B>" . $tot_vt . "&nbsp;&nbsp;&nbsp;<B>Sua Escolha</B>:" . $escolha . "</FONT></FONT>";
}
?>