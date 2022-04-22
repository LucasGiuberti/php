<?php
/*
1) Crie uma classe chamada Ingredient. Cada instâmcia dessa classe representa
Um único ingrediente. A instância deve registrar o nome do ingrediente e seu custo

2) Adicione um método à sua classe Ingredient que altere o custo de um ingrediente
*/
class Ingredient{
  protected $nome;
  protected $custo

  public function __construct($name, $custo){
    $this-> nome = $nome;
    $this->custo = $custo
  }
  public function getNome(){
    return $this->nome;
  }
  public function getCusto(){
    return $this->custo;
  }

  public function setCusto(){
    $this->custo = $custo
  }
}
