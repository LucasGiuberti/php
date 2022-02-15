<?php
// Iterando por um array multidimensional com foreach()
// $flavor é a chave e $example o valor
//$culture é a chave e $culture_flavor o valor (um array)

$flavors = array('Japanese' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
           'Chinese' => array('hot' => 'mustard', 'pepper-salty' => 'prickly ash'));
foreach ($flavors as $culture => $culture_flavors) {
    foreach ($culture_flavors as $flavor => $example) {
        print "A $culture $flavor flavor is $example.\n";
    }
}
