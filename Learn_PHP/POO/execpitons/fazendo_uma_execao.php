<?php
require 'lancando_uma_execao.php';
$drink = new Entree('Glass of Milk','milk');
if ($drink-> hasIngredient('milk')){
    print "Yummy!";
}
