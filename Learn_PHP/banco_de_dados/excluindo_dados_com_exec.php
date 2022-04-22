<?php
try{
  $db = new PDO('sqlite:/tmp/restaurant.db');
  $db-> setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRRMODE_EXECEPTION);
// remove pratos caros
if ($make_things_cheaper){
  $db->exec("DELETE FROM dishes WHERE price> 19.95");
}else{
  //ou remove todos os pratos
  $db-> exec("DELETE FROM dishes");
}
}catch (PDOException $e){
  print "Couldn't delete rows:".$e-> getMEssage();
}
