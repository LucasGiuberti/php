<?php
// Programa para inserção de registros em dishes

//Carrega a classe auxiliar do formulario
require 'FormHelper.php';
// Conecta-se com o banco de dados
try{
  $db = new PDO('sqlite:/tmp/restaurant.db');
}catch (PDOException $e){
  print "Can't connect:". $e-> getMessage();
  exit();
}
//Define exceções para erros do banco de dados
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRRMODE_EXECEPTION);
// Lógica da página principal:
// -Se o formulário for enviado, valida e processa ou reexibe
// - Se ele não for enviado, é exibido
if ($_SERVER['REQUEST_METHOD']== 'POST'){
  // Se validate_form() retorna erros, eles serão passado para show_form()
  list($erros, $input) = validate_form();
  if ($erros){
    show_form($erros);
  }else{
    // Os dados enviados são válidados, logo são processados
    process_form($input);
  }
}else{
  // o formulario não foi enviado, logo ele é exibido
  show_form();
}
function show_form($erros = array()){
  //Definição de nossos própios padrões: price é $5
  $defaults = array('price'=> '5.00');
  //Define o objeto $form com padrões apropriados
  $form = new FormHelper($defaults);
  // A exibição do código HTML e do formulário está em um arquivo separado para
  // melhorar o entendimento
  include 'insert-form.php';
}
function validate_form(){
  $input = array();
  $erros = array();

  //dish_name é obrigatório
  $input['dish_name'] = trim($_POST['dish_name']??"");
  if(!strlen($input['dish_name'])){
    $erros[] = 'Please enter the name of the dish.';
  }
  //preço deve ser um número de ponto flutuante válido e deve ser maior que 0
  $input['price']= filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
  if ($input['price'] <= 0){
    $erros[] = 'Please enter a valid price.';
  }
  // o padrão de is_spicy é 'no'
  $input['is_spicy'] = $_POST['is_spicy'] ?? 'no';
  return array($error, $input);
}
function process_form($input){
  //Acessa a variável global $db dentro dessa função global $db
  // Define o valor de $is_spicy de acordo com a caixa de seleção
  if ($input['is_spicy'] == 'yes'){
    $is_spicy =1;
  }else{
    $is_spicy = 0
  }
  //Insere o novo prato na tabela
  try{
    $stmt = $db-> prepare('INSERT INTO dishes(dish_name,price, is_spicy) VALUES(?,?,?)');
    $stmt-> execute(array($input['dish_name'], $input['price'], $is_spicy));
    // Fala para o usuario que adicionou a dishes
    print 'Added'.htmlentities($input['dish_name']).'to the database.';
  }catch (PDOException $e){
    print "Couldn´t add your dish to the database.";
  }
}
