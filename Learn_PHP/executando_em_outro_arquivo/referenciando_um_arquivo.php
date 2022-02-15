<?php
require 'restaurant-functions.php';
/*Conta de $25, mais 8,875% de imposto e 20% de gorjeta */
$total_bill = restarant_check(25,8.875,20);
/*Tenho $30*/
$cash = 30;
print "I need to pay with".payment_method($cash,$total_bill);