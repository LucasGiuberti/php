<?php
//Usando um estilo de busca diferente

//se usarmos apenas índices numéricos, será fácil agrupar os valores
$q = $db-> query('SELECT dish_name, price FROM dishes');
while ($row = $q-> fetch(PDO::FETCH_NUM)){
  print implode(',', $row). "\n";
}
// Com o uso de um objeto, a sintaxe de acesso às propriedade obtém os valores
$q = $db-> query('SELECT dish_name, price FROM dishes');
while ($row = $q->fetch(PDO::FETCH_OBJ)){
  print"{$row->dish_name} has price {$row->price}\n";
}
