<?php
$meals =
    array('breakfast' => ['Walnut Bun','Coffee'],
          'lunch' => ['Cashew Nuts', 'White Mushrooms'],
          'snack' => ['Dried Mulberries', 'Salted Sesame Crab']);
$lunches = [['Chicken', 'Eggplant' , 'Rice'],
           ['Beef', 'Beef', 'Scallions , Noodles'],
           ['Eggplant', 'Tofu']];
$flavors =
    array('Japanese' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
          'Chinese' =>  array('hot' =>'mustard', 'pepper-salty' => 'prickly ash'));

print $meals['lunch'][1];
print "\n";
print $meals['snack'][0];
print "\n";

print $lunches[0][0];
print "\n";
print $lunches[2][1];
print "\n";
print $flavors['Japanese']['salty'];
print "\n";
print $flavors['Chinese']['hot'];