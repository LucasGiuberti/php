<?php
$dinner = 'Curry Cuttlefish';

function vegetarian_dinner(){
    $dinner = 'Sauteed Pea Shoots';
    print "Dinner is $dinner, or ";
    print $dinner;
    print "\n";
}
function kosher_dinner(){
    $dinner = 'Kung Pao Chicken';
    print "Dinner is $dinner. or";
    print $dinner;
        print "\n";
}
print "Vegetarian ";
vegetarian_dinner();
print "Kosher";
kosher_dinner();
print "Regular dinner is $dinner";
