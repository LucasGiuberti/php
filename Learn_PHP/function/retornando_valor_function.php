<?php
function restaurant_check($meal, $tax, $tip): float|int
{
    $tax_amount = $meal * ($tax/100);
    $tip_amount = $meal * ($tip/100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    return $total_amount;
} //oi
// Calcula o custo total de uma refeição de $ 15.22
// com 8.25% de imposto e 15% de gorjeta
$total = restaurant_check(15.22,8.25,15);

print 'I only have $20 in cach, so...';
if ($total > 20){
    print "I must pay with my credit card";
}
else {
    print "I can pay with cash.";
}