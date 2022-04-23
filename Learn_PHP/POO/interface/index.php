<?php
/**
 *
 */
interface Animal{
    function respirar();
}

class Cachorro implements Animal {
  function respirar(){
    echo "Irei respirar";
  }
}

$animal1 = new Cachorro();
$animal1 ->respirar();
echo 'Fim'
