<?php
namespace Tiny;
class Fruit{
    public static function munch($bite){
        print "Here is a tiny munch of $bite.";
    }
}
\Tiny\Fruit::munch("banana");