<?php
// Enviando um comando CREATE para o programa de banco de dados
try{
  $db = new PDO('sqlite:/tmp/returant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->exec("CREATE TABLE dishes(
    dish_id INT
    dish_name VARCHAR(255),
    price DECIMAL(4,2),
    is_spicy INT
  )");
} catch (PDOException $e){
  print "Couldn't create table:".$e->getMessage();
}|
