<?php
if(isset($_GET['i']) == true){
	$i = $_GET['i'];
	$data = file_get_contents('todo.json');
	$json = json_decode($data,true);
	$base = $json[$i];
	$replacement =  array('completa' => 'Sim');
	$json[$i] = array_replace($base, $replacement);

	echo "Alterado com sucesso";
$json = json_encode($json);
file_put_contents('todo.json', $json);
header("location: lista.html");
die();
}
else{
	echo "erro!";
}
?>