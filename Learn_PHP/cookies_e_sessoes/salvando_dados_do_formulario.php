<?php
require 'formHelper.php';
session_start();
$main_dishes=array('cuke'=> 'braised Sea Cucumber',
          'stomach'=> "Sauteed Pig's Stomach",
          'Tripe' => 'Sauteed Tripe with Wine Sauce',
          'taro'=> 'Stewed Pork with Taro',
          'giblets' => 'Baked Giblets with Salt',
          'abalone'=> 'Abalone with Marrow and Duck Feet');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  list ($errors, $input) = validate_form();
  if ($errors){
    show_form($errors);
  }else{
    process_form($input);
  }
}else {
  show_form();
}
function show_form($errors = array()){
  //Não definimos padrões, logo, não há nada a passar para o
  // construtor de FormHelper
  $form = new FormHelper();
  //Constrói o código HTML de erro para ser usado posteriomente
  if($errors){
    $errorHtml = '<ul><li>';
    $errorHtml.= 'implode('</li><li>', $errors)';
    $errorHtml = '</li></ul>';
  }else{
    $errorHtml = "";
  }
  //Esse formulário é pequeno, logo, exibiremos seus componentes aqui
  print <<_FORM_
  <form method = "POST" action="{$form->encode($_SERVER['PHP_SELF'])}">
  $errorHtml
  Dish:{$form -> select($GLOBALS['main_dishes'], ['name'=> 'dish'])}<br/>
  Quantity:{$form->input('text',['name' => 'quantity'])}<br/>
  {$form->input('submit', ['value'=> 'Order'])}
  </form>
  _FORM_;
}
function validate_form(){
  $input = array();
  $errors = array();
  // O prato selecionado no menu deve ser válido
  $input['dish'] = $_POST['dish']??"";
  if(!array_key_exists($input['dish'], $GLOBALS['main_dishes'])){
    $errors[] ='Please select a valid dish';
  }
  $input['quantity'] = filter_input(INPUT_POST,'quantity', FILTER_VALIDATE_INT,
  array('options' => array('min_range' => 1)));
  if (($input['quantity'] ===false) || ($input['quantity'] === null)){

    $errors[] = 'PLease enter a quantity';
  }
  return array($errors, $input);
}
function process_form($input){
  $_SESSION['order'][] = array('dish' => $input['dish'], 'quantity' => $input['quantity']);
  print "Thank you for your order.";
}
