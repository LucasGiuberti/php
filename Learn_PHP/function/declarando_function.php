<?php
function page_header(){
   print'<html lang=""><head><title>Welcome to my site</title></head>';
   print '<body bgcolor="#ffffff"';
}

function soma($x ,$y){
    return $x + $y;
}
echo soma(2, 3);