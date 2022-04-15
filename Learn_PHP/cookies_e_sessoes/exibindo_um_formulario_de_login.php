<?php
require 'FormHelper.php'
session_start();
is($_SERVER['REQUEST_METHOD']=='POST'){
  list($errors, $input) = validate_form();
  if($errors){
    show_form($errors);
  }else{
    process_form($input)
  }
}else{
  show_form();
}
function show_form($errors = array()){
  //Não definimos padrões, logo, não há nada a passar para o
  // construtor de FormHelper
  $form = new FormHelper();
  //Constói o código HTML de erro para ser usado posteriormente
  if($erros){
    $errorHtml = '<ul><li>';
    $errorHtml.= 'implode('</li><li>', $errors)';
    $errorHtml = '</li></ul>';
  }else {
    $errorHTML = "";
  }
  // Esse formulário é pequeno, logo exibiremos seus componentes sem_acquire
  print <<_FORM_
  <form method = "POST" action="{$form->encode($_SERVER['PHP_SELF'])}">
  $errorHtml
Username:{$form-> input('text',['name'=> 'username'])}
<br/>
Password:{$form->input('passord',['name' => 'password'])} <br/>
{$form-> input('submit', ['value']=> 'Log In')}
  </form>
  _FORM_;
  function validate_form(){
    $input=array();
    $errors=array();
    //Alguns exemplos de nomes de usuários e senhas
    $user = array('alice'=> 'dog123', 'bob' => 'my^pwd','charlie'=> '**fun**');
    //Verifica se o nome de usuário é válido
    $input ['username'] = $_POST['username']??"";
    if(!array_key_exists($input['username'], $users)){
      $errors[] = 'Please enter a valid username and password.';
    }
    //  A cláusula else indica que não verificamos a senha se um nome de usuário
    // inválido for inserido
  }
  else{
    //Vê se a senha está correta
    $saved_password = $users[$input['username']];
    $submitted_password = $_POST['password']??"";
    if ($saved_password != $submitted_password){
      $errors[] = 'PLease enter a valid username and password.';
    }
  }
  return array($errors,$input);
}
function process_form($input){
  //Adiciona o nome de usuário à sessão
  $_SESSION['username']= $input['username'];
  print "Welcome, $_SESSION[username]";
}
