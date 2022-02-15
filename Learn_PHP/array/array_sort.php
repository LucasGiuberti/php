<?php
$dinner = array('Sweet Corn and Asparagus',
              'Lemon Chicken',
              'Braised Bamboo Fungus');
$meal = array('breakfast' => 'WalnutBun',
              'lunch' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
foreach ($dinner as $key => $value){
    print "\$dinner: $key $value\n";
}
foreach ($meal as $key => $value){
    print "\$meal: $key $value\n";
}// array associativo use asort
sort($dinner);
sort($meal);

print "after Sorting:\n";
foreach ($dinner as $key => $value) {
    print "\$dinner: $key $value\n ";
}
foreach ($meal as $key => $value){
    print "\$meal: $key $value\n";
}