<?php
class Entree{
    public $name;
    public $ingredients =array();

    public function hasIngreedient($ingredient){
        return in_array($ingredient, $this-> ingredients);
    }
    public static function getSizes(){
        return array('small', 'medium', 'large');
    }
}
// Chamando um método estático
$sizes = Entree::getSizes();