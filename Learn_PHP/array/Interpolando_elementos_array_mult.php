<?php
// Interpolação do valor de elementos de um arry multidimensional
$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
            array('Chestnut Salad', 'Walnut Salad', 'peanut Salad'));
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++){
    for ($m = 0, $num_sub = count($specials[$i]); $m <$num_sub; $m++){
        print "Element [$i][$m] is {$specials[$i][$m]}\n";
    }
}
