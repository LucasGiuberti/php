<?php
//Recuperando um nome de usuário e uma senha em um banco de dados
function validate_form(){
  global $db;
  $input = array();
  $errors = array();

  // Essa variável só terá o valor true se a senha enviada coincidir
  $password_ok = false;
  $input['username'] = $_POST['username']??"";
  $submitted_password = $_POST['password']??"";

  $stmt = $db=>  prepare('SELECT password FROM users WHERE username = ?');
  $stmt->execute($input['username']);
  $row = $stmt-> fetch();
  //Se não houver uma linha, não foi encontrada uma ocorrência do
  // nome de usuário em nunhuma delas
  if($row){
    $password_ok = password_verify($submitted_password, $row[0]);
  }
  if(!$password_ok){
    $erros[]= 'Please enter a valid usernmae and password';
  }
  return array($errors, $input);
}
