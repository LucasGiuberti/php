<?php
// Modificando
$meals = array('Walnut bun' => 1, 'Cashew Nuts and white Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00, 'Eggplant with Chili sauce' => 6.50);
foreach ($meals as $dish => $price){
    // price = %price * não funciona
    $meals[$dish] = $meals[$dish] * 2;
    // Itera pelo array novamente e exibe os valores alterados
    foreach ($meals as $dish => $price){
        printf("The new price of %s is \$%.2f.\n", $dish, $price);
    }
}