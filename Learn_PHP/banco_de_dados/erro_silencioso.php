<?php
// O construtor sempre lança uma exceção quando falha
try {
  $db = new PDO('sqlite:/tmp/retaurant.db');
}catch (PDOException $e){
  print "Couldn´t connect:". $e-> getMessage();
}
$result = $db-> exec("INSERT INTO dishes(dish_size, dish_name,pricem, is_spicy)
VALUE('large', 'Sesame Seed, Puff', 2.50,0)");
if (false ===$result){
  $error = $db->errorInfo();
  print "Couldn´t insert!\n";
  print "SQL ERROR={$error[0]}, DB Error={$error[1]},
Message={$error[2]}\n;"
}
