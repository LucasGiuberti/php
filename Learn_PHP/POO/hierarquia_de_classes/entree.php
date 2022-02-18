<?php
// Lançando uma exeção
class Entree
{
    public string $name;
    public array $ingredients = array();

    public function __construct($name, $ingredients)
    {

        if (!is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }
}

