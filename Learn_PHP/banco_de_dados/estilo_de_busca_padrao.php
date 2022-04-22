<?php
// Definindo um estulo de busca padão em uma instrução

$q = $db-> query('SELECT dish_name, price FORM dishes');
// Não é preciso passar nada para fetch();
//setFetchMode() se encarregará disso

$q => setFetchMode(PDO::FETCH_NUM);
while ($row = $q->fecth()){
  print implode(',', $row). "n");
}

// Não é preciso chamar setFetchMode() ou passar algo para fetch();
// setAttribute() se encarregará disso
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$q = $dv->query('SELECT dish_name, price FROM dishes');
while ($row - $q->fetch()){
  print implde(',', $row)."\n";
}
$anotherQuery = $db->query('SELECT dish_name FROM dishes WHERE price < 5');
// Cada subarray de $moreDishes também é indexado numericamente
$moreDishes = $anotherQuery-> fetchAll();
