<?php
include("lista.html");
$str_data = file_get_contents("todo.json");
$data = json_decode($str_data, true);
if ($data == null) {
     echo "<h1> Insira itens na sua To-do list!<h1>";
     die();
}else{
     $select = $_GET['selecao'];
     if($select == "1"){
          $temp = "<table border ='1'>";
          $temp .= "<tr><th>Local</th>";
          $temp .= "<th>Produto</th>";
          $temp .= "<th>Quantidade</th>";
          $temp .= "<th>Tipo</th>";
          $temp .= "<th>Mensagem</th>";
          $temp .= "<th>Completa</th><tr>";
          for($i = (sizeof($data)-1); $i > -1; $i--){
               $temp .= "<tr>";
               $temp .= "<td>" . $data[$i]["local"] . "</td>";
               $temp .= "<td>" . $data[$i]["produto"] . "</td>";
               $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
               $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
               $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
               if ($data[$i]["completa"] == "Não") {
                    $temp .= "<td>";
                    $temp .= "<a href ='conclui.php?i=".$i."'>";
                    $temp .= "</a";
                    $temp .= "<td>" . $data[$i]["completa"] . "</td>";
               }else{
                    $temp .= "<td>" . $data[$i]["completa"] . "</td>";
               }
               $temp .= "<td>";
               $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
               $temp .= "<span >Excluir</i><i></i></span>";
               $temp .="</td>";
               $temp .="</tr>";
               }
          $temp .= "</table>";
          echo $temp;  
               }elseif ($select == "2") {
               $temp = "<table border ='1'>";
               $temp .= "<tr><th>Local</th>";
               $temp .= "<th>Produto</th>";
               $temp .= "<th>Quantidade</th>";
               $temp .= "<th>Tipo</th>";
               $temp .= "<th>Mensagem</th>";
               $temp .= "<th>Completa</th><tr>";
               for($i = 0; $i < sizeof($data);$i++){
                    if ($data[$i]["local"] =="Mercado") {
                         $temp .= "<tr>";
                         $temp .= "<td>" . $data[$i]["local"] . "</td>";
                         $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                         $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                         $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                         $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                         if ($data[$i]["completa"] == "Não") {
                              $temp .= "<td>";
                              $temp .= "<a href ='conclui.php?i=".$i."'>";
                              $temp .= "</a";
                              $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                         }else{
                              $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                         }
                         $temp .= "<td>";
                         $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                         $temp .= "<span >Excluir</i><i></i></span>";
                         $temp .="</td>";
                         $temp .="</tr>";
                    }
               }
               for($i = 0; $i < sizeof($data);$i++){
                    if ($data[$i]["local"] !="Mercado") {
                         $temp .= "<tr>";
                         $temp .= "<td>" . $data[$i]["local"] . "</td>";
                         $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                         $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                         $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                         $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                              if ($data[$i]["completa"] == "Não") {
                                   $temp .= "<td>";
                                   $temp .= "<a href ='conclui.php?i=".$i."'>";
                                   $temp .= "</a";
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }else{
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }
                         $temp .= "<td>";
                         $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                         $temp .= "<span >Excluir</i><i></i></span>";
                         $temp .="</td>";
                         $temp .="</tr>";
                    }
               }
          $temp .= "</table>";
          echo $temp;  
// termina 2
     }elseif ($select == "3") {
                    $temp = "<table border ='1'>";
                    $temp .= "<tr><th>Local</th>";
                    $temp .= "<th>Produto</th>";
                    $temp .= "<th>Quantidade</th>";
                    $temp .= "<th>Tipo</th>";
                    $temp .= "<th>Mensagem</th>";
                    $temp .= "<th>Completa</th><tr>";
                         for($i = 0; $i < sizeof($data);$i++){
                              if ($data[$i]["local"] =="Farmácia") {
                              $temp .= "<tr>";
                              $temp .= "<td>" . $data[$i]["local"] . "</td>";
                              $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                              $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                              $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                              $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                              if ($data[$i]["completa"] == "Não") {
                                   $temp .= "<td>";
                                   $temp .= "<a href ='conclui.php?i=".$i."'>";
                                   $temp .= "</a";
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }else{
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }
                              $temp .= "<td>";
                              $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                              $temp .= "<span >Excluir</i><i></i></span>";
                              $temp .="</td>";
                              $temp .="</tr>";
                         }
                    }
                    for($i = 0; $i < sizeof($data);$i++){
                         if ($data[$i]["local"] !="Farmácia") {
                              $temp .= "<tr>";
                              $temp .= "<td>" . $data[$i]["local"] . "</td>";
                              $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                              $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                              $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                              $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                              if ($data[$i]["completa"] == "Não") {
                                   $temp .= "<td>";
                                   $temp .= "<a href ='conclui.php?i=".$i."'>";
                                   $temp .= "</a";
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }else{
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }
                              $temp .= "<td>";
                              $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                              $temp .= "<span >Excluir</i><i></i></span>";
                              $temp .="</td>";
                              $temp .="</tr>";
                         }
                    }
                    $temp .= "</table>";
                    echo $temp;  
          }elseif ($select == "4") {
               $temp = "<table border ='1'>";
               $temp .= "<tr><th>Local</th>";
               $temp .= "<th>Produto</th>";
               $temp .= "<th>Quantidade</th>";
               $temp .= "<th>Tipo</th>";
               $temp .= "<th>Mensagem</th>";
               $temp .= "<th>Completa</th><tr>";
               for($i = 0; $i < sizeof($data);$i++){
                    if ($data[$i]["local"] =="Padaria") {
                    $temp .= "<tr>";
                    $temp .= "<td>" . $data[$i]["local"] . "</td>";
                    $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                    $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                    $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                    $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                    if ($data[$i]["completa"] == "Não") {
                         $temp .= "<td>";
                         $temp .= "<a href ='conclui.php?i=".$i."'>";
                         $temp .= "</a";
                         $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                    }else{
                         $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                    }
                    $temp .= "<td>";
                    $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                    $temp .= "<span >Excluir</i><i></i></span>";
                    $temp .="</td>";
                    $temp .="</tr>";
               }
          }
          for($i = 0; $i < sizeof($data);$i++){
               if ($data[$i]["local"] !="Padaria") {
                    $temp .= "<tr>";
                    $temp .= "<td>" . $data[$i]["local"] . "</td>";
                    $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                    $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                    $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                    $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                    if ($data[$i]["completa"] == "Não") {
                         $temp .= "<td>";
                         $temp .= "<a href ='conclui.php?i=".$i."'>";
                         $temp .= "</a";
                         $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                    }else{
                         $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                    }
               $temp .= "<td>";
               $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
               $temp .= "<span >Excluir</i><i></i></span>";
               $temp .="</td>";
               $temp .="</tr>";
               }
          }
          $temp .= "</table>";
          echo $temp;  
          }elseif ($select == "5") {
               $temp = "<table border ='1'>";
               $temp .= "<tr><th>Local</th>";
               $temp .= "<th>Produto</th>";
               $temp .= "<th>Quantidade</th>";
               $temp .= "<th>Tipo</th>";
               $temp .= "<th>Mensagem</th>";
               $temp .= "<th>Completa</th><tr>";
                    for($i = 0; $i < sizeof($data);$i++){
                         if ($data[$i]["local"] =="Açougue") {
                              $temp .= "<tr>";
                              $temp .= "<td>" . $data[$i]["local"] . "</td>";
                              $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                              $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                              $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                              $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                              if ($data[$i]["completa"] == "Não") {
                                   $temp .= "<td>";
                                   $temp .= "<a href ='conclui.php?i=".$i."'>";
                                   $temp .= "</a";
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }else{
                                   $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                              }
                         $temp .= "<td>";
                         $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                         $temp .= "<span >Excluir</i><i></i></span>";
                         $temp .="</td>";
                         $temp .="</tr>";
                         }
                    }
               for($i = 0; $i < sizeof($data);$i++){
                    if ($data[$i]["local"] !="Açougue") {
                         $temp .= "<tr>";
                         $temp .= "<td>" . $data[$i]["local"] . "</td>";
                         $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                         $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                         $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                         $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
                         if ($data[$i]["completa"] == "Não") {
                              $temp .= "<td>";
                              $temp .= "<a href ='conclui.php?i=".$i."'>";
                              $temp .= "</a";
                              $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                         }else{
                              $temp .= "<td>" . $data[$i]["completa"] . "</td>";
                         }
                         $temp .= "<td>";
                         $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
                         $temp .= "<span >Excluir</i><i></i></span>";
                         $temp .="</td>";
                         $temp .="</tr>";
                    }
               }
               $temp .= "</table>";
               echo $temp;  
          }elseif($select =="6") {
               $temp = "<table border ='1'>";
               $temp .= "<tr><th>Local</th>";
               $temp .= "<th>Produto</th>";
               $temp .= "<th>Quantidade</th>";
               $temp .= "<th>Tipo</th>";
               $temp .= "<th>Mensagem</th>";
               $temp .= "<th>Completa</th><tr>";
               for($i = 0; $i < sizeof($data); $i++){
                    $temp .= "<tr>";
                    $temp .= "<td>" . $data[$i]["local"] . "</td>";
                    $temp .= "<td>" . $data[$i]["produto"] . "</td>";
                    $temp .= "<td>" . $data[$i]["quantidade"] . "</td>";
                    $temp .= "<td>" . $data[$i]["tipo"] . "</td>";
                    $temp .= "<td>" . $data[$i]["mensagem"] . "</td>";
               if ($data[$i]["completa"] == "Não") {
                    $temp .= "<td>";
                    $temp .= "<a href ='conclui.php?i=".$i."'>";
                    $temp .= "</a";
                    $temp .= "<td>" . $data[$i]["completa"] . "</td>";
               }else{
                    $temp .= "<td>" . $data[$i]["completa"] . "</td>";
               }
               $temp .= "<td>";
               $temp .= "<a href='deleta.php?i=". $i ."&produto=".$data[$i]["produto"]."'>";
               $temp .= "<span >Excluir\n</i><i></i></span>";
               $temp .="</td>";
               $temp .="</tr>";
          }
          $temp .= "</table>";
          echo $temp; 
          }
     }
?>