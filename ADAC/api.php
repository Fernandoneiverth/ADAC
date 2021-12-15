<?php
include("addtodo.html");
include("insere.php");
$local = $_GET['local'];
$produto = $_GET['produto'];
$quantidade = $_GET['quantidade'];
$mensagem = $_GET['mensagem'];
$tipo = $_GET['tipo'];
if (isset($_GET['completa']) == null) {
	$completa = "Não";
}
else{
	$completa = "Sim";
}
if ($local == '' || $produto == '' || $local == 'Selecione' || $tipo == 'Selecione' ) {
	echo "<div class='container fluid'>";
	echo "<h3>Preencha tudo!<h3>";
	echo "</div>";
} else {
	$contents = file_get_contents('todo.json');
	$json = json_decode($contents, true);

$json[] = array('local' => $local, "produto" => $produto, 'tipo' => $tipo, "quantidade" => $quantidade, "mensagem" => $mensagem, "completa" => $completa);
echo "<h3>Inserido com sucesso!</h3>";
$json= json_encode($json);
file_put_contents('todo.json', $json);

}

?>