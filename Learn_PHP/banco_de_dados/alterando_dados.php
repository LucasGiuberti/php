<?php
// Alterando dados com exec()

try{
  $db = new PDO('sqlite:/tmp/retaurant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //Eggplant with Chili Sauce (berinjela com molho de pimenta)é um prato apimentado
  //Se não quisermos saber quantas linhas serão afetadas,
  //não precisamos manter ov valor de retorno exec()
  $db-> exec("UPDATE dishes SET is_spicy = 1
  WERE dish_name = 'Eggplant with Chili Sauce'");
  // Lobster with Chili Sauce(lagosta com molho de pimenta) é apimentado e caro
  $db-> exec("UPDATE dishes SET is_spicy = 1, price= price * 2
  WHERE dish_name='Lobster with Chili Sauce'");
} catch (PDOException $e){
  print "Couldn't insert a row:". $e-> getMessage();
}
