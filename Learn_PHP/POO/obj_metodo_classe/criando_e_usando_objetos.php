<?php
require 'definindo_uma_classe.php';
// Cria uma instância e a atribui a $soup
$soup = new Entree;
// Define as propiedade de $soup
$soup->name='Chicken Soup';
$soup->ingredients=array('chicken', 'water');
$sandwich = new Entree;
// Define as propriedades de $sandwich
$sandwich->name='Chicken Sandwich';
$sandwich->ingredients=array('chicken','bread');

foreach (['chicken', 'lemon','bread','water'] as $ing){
    if($soup->hasIngredient($ing)) {
        print "Soup contains $ing.\n";
    }
    if ($sandwich->hasIngredient($ing)){
        print "Sandwich contains $ing.\n";
    }
}