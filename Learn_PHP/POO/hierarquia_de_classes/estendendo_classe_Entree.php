<?php
require 'entree.php';
class ComboMeal extends Entree{
    public function hasIngredient($ingredient): bool
    {
        foreach ($this-> ingredients as $entree){
            if($entree->hasIngredient($ingredient)){
                return true;
            }
        }
        return false;
    }
}


