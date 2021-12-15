<?php
if(isset($_GET['i']) == true){
	$i = $_GET['i'];
	$produto = $_GET['produto'];
	$data = file_get_contents('todo.json');
	$data = json_decode($data,true);
	$obj = $data;
for($j = 0; $j < sizeof($data); $j++){
	if ($j == $i && $produto == $data[$j]['produto'] ) {
		unset($data[$j]);
		echo "Excluído com sucesso";
	}
}
$data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('todo.json', $data);
header("location: lista.html");
die();
}
else{
	echo "erro!";
}
?>