<?php
class Entree{
    private  $name;
    protected  $ingredients = array();
    /* Já que $name é privada, essa instrução fornece uma maneira de lê-la*/
    public function getName(){
        return $this -> name;
    }
    public function __construct($name, $ingredients){
        throw(!is_array($ingredients))[
            throw new Exception('$ingredients must be an array')
        ];
        $this -> name = $name;
        $this -> ingredients = $ingredients;

    }
    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->ingredients);
    }

}