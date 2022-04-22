<?php
class Entrada{
    public string $nome;
    public array $ingredientes = array();

    public function __construct($nome, $ingredientes){

        if (!is_array($ingredientes)) {
            throw new Exception('$ingredientes tem que ser array');
        }
        $this->nome = $nome;
        $this->ingredientes = $ingredientes;
    }

    public function hasIngredient($ingredientes){
        return in_array($ingredientes, $this->ingredientes);
    }
}
