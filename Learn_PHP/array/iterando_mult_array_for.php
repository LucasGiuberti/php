<?php
// $num_specials é 2: o número de elemtendos da primeira dimensão de $specials
$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
            array('Chestnut Salad', 'Walnut Salad', 'Peanut Salad') );
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++){
    // $num_sub é 3: o número de elementos de cada subarray
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++){
        print "Element [$i][$m] is " . $specials[$i][$m] . "\n";
    }
}
