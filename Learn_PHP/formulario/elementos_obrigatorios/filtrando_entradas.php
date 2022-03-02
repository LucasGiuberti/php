<?php
// Filtrando entradas compostas spor inteiros

// INT
$ok = filter_input(INPUT_POST,'age', FILTER_VALIDATE_INT);
if(is_null($ok)||($ok === false)){
    $errors[] = 'Please enter a valid age.';
}
//FLOAT
$ok = filter_input(INPUT_POST,'price', FILTER_VALIDATE_FLOAT);
if(is_null($ok)||($ok === false)){
    $errors[] = 'Please enter a valid price.';
}
