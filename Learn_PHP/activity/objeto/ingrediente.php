<?php
/* 1) Crie uma classe chamada Ingedient. Cada instância dessa classe representa
um único ingrediente. A instância deve registar o nome do ingrediente e seu custo*/

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
}
