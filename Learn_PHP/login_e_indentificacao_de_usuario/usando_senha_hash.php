<?php
function validate_form(){
  $input = array();
  $errors= array();
  // Exemplos de usuários que têm senhas com hash
  $users = array('alice' => '$2y $10$N471XMT8C.sKUFXs1EBS9uJRuVV8bWxwqubcvNQYP9vcFMLSWEAbq',
'bob' =>'$2y       $10$qCczYrpisujf09jwaeofjhw0e89hjfn08uihjsof8ihjfOIUAHHoh',
'charlie' => ' $2y $10$nKIUhsoUHFQWRasfhou9aYFHOFIhOAIfhOIDFAHJjPOSUDfuhOSDI');
// Verifica se o nome de usuário é válido
if(!array_key_exists($_POST['username'], $users)){
  $errors[] = 'Please enter a valid username and password'
}else{
  // Ve se a senha está correta
  $save_password = $users[$input['username']];
  $submitted_password = $_POST['password']??"";
  if(!password_verify($submitted_password, $saved_password)){
    $errors[] = 'Please enter a valid username and password';
  }
}
return array($errors, $input)
}
