<?php
class Entree{
    public string $name;
    public array $ingredients = array();

    public function __construct($name, $ingredients ){
        $this->name =$name;
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }
}