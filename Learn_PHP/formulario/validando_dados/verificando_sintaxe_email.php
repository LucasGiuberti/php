<?php
// Verificando a sintaxe de um endereço de email
$input['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (!$input['email']){
    $errors[] = 'PLease enter a valid email address';
}