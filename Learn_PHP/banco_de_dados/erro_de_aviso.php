<?php
// Trabalhando com o modo de erro de aviso

// O Construtor sempre lança uma exceção quando falha
try{
  $db = new PDO('sqlite:/tmp/restaurant.db');
}catch(PDOException $e){
  print "Couldn't connect:". $e-getMessage();
}
$db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_WARNING);
$result = $db-> exec("INSERT INTO dishes (dish_size, dish_name,price, is_spicy)
VALUES('')")
