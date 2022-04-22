<?php
// Primeiro, faz a inserção comum das aspas do valor
$dish = $db-> quote($_POST['dish_name']);
// Em seguida, insere barras invertidas antes de buclinhados e sinas de porcentagem
$dish = strtr($dish, array('_'=> '\_', '%'=> '\%'));
// Agora, $dish está sanetizada e pode ser interpolada na consulsta
$db-> exec("UPDATE dishes SET price = 1 WHERE dish_name LIKE $dish");
