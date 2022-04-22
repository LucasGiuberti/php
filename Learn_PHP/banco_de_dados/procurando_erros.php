<?php
//Procurando erros em exec()
try{
  $db = new PDO('sqlite:/tmp/restaurant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $affectedROws = $db->exec("INSERT INTO dishes (dish_size, dish_name, price, is_spicy)
  VALUE('large', 'Sesame Seed Puff', 2.50,0)");
} catch(PDOException $e){
  print "Couldn't insert a row:".$e->getMessage();
}
