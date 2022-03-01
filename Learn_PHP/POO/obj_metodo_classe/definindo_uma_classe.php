<?php

// O exemplo define uma classe Entree para representar uma refeição
class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this-> ingredients);
    }
}
