<?php
// Colisão entre variável de array e escalar

// Essa instrução transforma $vegetables em um array
$vegetables['corn'] = 'yellow';
// Essa remove qualquer traço de "corn" e "yellow" e torna $vegetables uma variável escalar

$vegetables = 'delicius';
echo $vegetables;
// A instrução a seguir transforma $fruits em uma variável escalar

$fruits = 283;

// Essa não funcina -- $fruits continua sendo 283 e o engine PHP emite um aviso
//$fruits['potassium'] = 'banana';

// Já essa sobrepõe $fruits, que passa a ser um array
$fruits = array('potassium' => 'banana');