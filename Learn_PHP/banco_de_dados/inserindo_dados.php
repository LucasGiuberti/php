<?php
// Inserindo dados com exec()
try{
  $db = new PDO('sqlite:/tmp/retaurant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $affectedRows = $db->exec("INSERT INTO dishes
    (dish_name, price, is_spicy)VALUE('Sesame Seed puff', 2.50, 0)");
} catch (PDOException $e){
  print "couldn't insert a row:". $e-> getMessage();
}
