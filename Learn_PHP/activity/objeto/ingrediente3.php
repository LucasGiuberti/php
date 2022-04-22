<?php
/*
3) Crie uma subclasse da classe Entrada que aceite objetos Ingrediente em vez de
nomes no formato de string para especificar os ingreedientes. Forneça para sua subclasse
Entrada um método que retorne o custo total do prato
*/
require 'entrada.php';

class ingrediente extends Entrada{
  public function __construct($nome, $ingredientes){
    parent::__construct($nome, $ingredientes);
    foreach ($this->$ingredientes as $ingrediente) {
      if(!ingrediente instanceof Ingrediente){
        throw new Exception("Elemento no $ingredientes tem que ser objeto de Ingrediente");

      }
    }
  }
public function getCusto(){
  $cuso = 0
  foreach($this->ingredientes as $ingrediente){
  $custo += $ingrediente->getCusto();
  }
  return $custo
}
}
