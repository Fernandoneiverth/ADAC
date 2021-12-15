<?php
function cadastrar($local, $produto, $tipo, $quantidade,$mensagem, $completa, $json){
$json[] = array('local' => $local, "produto" => $produto, 'tipo' => $tipo, "quantidade" => $quantidade, "mensagem" => $mensagem, "completa" => $completa);
echo "<h3>Inserido com sucesso!</h3>";
$json= json_encode($json);
file_put_contents('todo.json', $json);
}


?>