<?php
require 'lancando_uma_execao.php';
// Usando try e catch
try {
    $drink = new Entree('Glass of Milk', 'milk');
    if ($drink -> hasIngredient('milk')){
        print "Yummy!";
    }
}catch (Exception $e){
    print "Couldn't create the drink: ".$e->getMessage();
}
