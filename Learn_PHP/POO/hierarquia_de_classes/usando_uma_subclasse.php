<?php
require 'estendendo_classe_Entree.php';
//Sopa com nome e ingredietes
$soup = new Entree('Chicken Soup', array('chicken', 'water'));

//Sanduíche com nome e ingredientes
$sandwich = new Entree('Chicken Sandwich', array('chicken','bread'));

//Refeição em combo
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));

foreach (['chicken','water','pickles'] as $ing){
    if($combo -> hasIngredient($ing)){
        print "Something in the combo contains $ing.\n";
    }

}
